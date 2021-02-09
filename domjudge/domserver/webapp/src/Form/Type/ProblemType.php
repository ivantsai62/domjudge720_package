<?php declare(strict_types=1);

namespace App\Form\Type;

use App\Entity\Executable;
use App\Entity\Problem;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
//暫時新增
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Common\Collections\ArrayCollection;
use App\Entity\SubmitProblemType;
use App\Entity\Language;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use App\Entity\ProblemGroup;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProblemType extends AbstractExternalIdEntityType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     * @throws \Exception
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->addExternalIdField($builder, Problem::class);
        $builder->add('name', TextType::class);
        $builder->add('timelimit', NumberType::class);
        $builder->add('memlimit', IntegerType::class, [
            'required' => false,
            'help' => 'leave empty for default',
        ]);
        $builder->add('outputlimit', IntegerType::class, [
            'required' => false,
            'help' => 'leave empty for default',
        ]);
        $builder->add('problemtextFile', FileType::class, [
            'label' => 'Problem text',
            'required' => false,
        ]);
        $builder->add('clearProblemtext', CheckboxType::class, [
            'label' => 'Delete problem text',
            'required' => false,
        ]);
        $builder->add('runExecutable', EntityType::class, [
            'label' => 'Run script',
            'class' => Executable::class,
            'required' => false,
            'placeholder' => '-- default run script --',
            'choice_label' => 'description',
            'query_builder' => function (EntityRepository $er) {
                return $er
                    ->createQueryBuilder('e')
                    ->where('e.type = :run')
                    ->setParameter(':run', 'run')
                    ->orderBy('e.execid');
            },
        ]);
        $builder->add('compareExecutable', EntityType::class, [
            'label' => 'Compare script',
            'class' => Executable::class,
            'required' => false,
            'placeholder' => '-- default compare script --',
            'choice_label' => 'description',
            'query_builder' => function (EntityRepository $er) {
                return $er
                    ->createQueryBuilder('e')
                    ->where('e.type = :compare')
                    ->setParameter(':compare', 'compare')
                    ->orderBy('e.execid');
            },
        ]);
        $builder->add('specialCompareArgs', TextType::class, [
            'label' => 'Compare script arguments',
            'required' => false,
        ]);
        $builder->add('combinedRunCompare', CheckboxType::class, [
            'label' => 'Use run script as compare script.',
            'required' => false,
        ]);
        /*-------CCU-------*/
        //新增限制語言
        $restriction_languages       = $this->em->getRepository(Language::class)->findAll();
        $restriction_languagesChoices = [];
        foreach ($restriction_languages as $restriction_language) {
            if($restriction_language->getAllowSubmit() == 1){
            $restriction_languagesChoices[$restriction_language->getName()] = $restriction_language->getName();
            }
        }
        //add subtask form table
        $builder->add('subtask', IntegerType::class, [
            'required' => false,
            'attr' => array(
                'min' => '0',
                'max' => '20',
            )
        ]);
        //hide taskpoint table , use to save the data of taskpoint(with javascript)
        $builder->add('taskpoint', HiddenType::class, [
        ]);
        //add restriction language
        $builder->add('restrictionlanguages', ChoiceType::class, [
            'multiple' => true,
            'required' => false,
            'label' => 'Restriction Languages',
            'choices' => $restriction_languagesChoices,
        ]);

        $problems_group = $this->em->getRepository(Problem::class)->findAll();
        $problems = $this->em->getRepository(Problem::class)->findAll();
        
        $problem_groupChoices = [];
        foreach($problems_group as $problem_group){
            if($options['data']->getName() != $problem_group->getName())
            $problem_groupChoices[$problem_group->getName()] = $problem_group->getName();
        }
        //題組問題限制
        $maybe_same_problem_name = [];
        $problems_group1 = [];
        $edit_group = [];
        $check_repeat = [];
        $not_allow = [];
        $maybe_edit_group = [];
        $get_this_problem_name = $options['data']->getName();
        $allow_edit = [];
             
        //將所有問題抓出，如果子題為空代表該題目可以被加入成為子題
        foreach($problems as $problem => $v){
            
            $check_repeat[$v->getName()] =$v->getProblemsGroup();
            if($check_repeat[$v->getName()] == null && $v->getName()){
                array_push($edit_group, $v);
            }else{
                array_push($maybe_same_problem_name, $v);
            }
        }
        //判斷當前題目是否為其他題目的子題，若是將題目丟到 $not_allow 中
        for($i=0; $i<count($maybe_same_problem_name) ;$i++){
             $compare[$i] = $maybe_same_problem_name[$i]->getProblemsGroup();
             
             $flag = 0;
             
             for($j=0;$j<count($compare[$i]);$j++){
                 if(isset($compare[$i][$j])){
                 if($compare[$i][$j] == $get_this_problem_name)
                    $flag = 1;}
             } 
                if($flag == 1){
                    array_push($not_allow, $maybe_same_problem_name[$i]);
                }else{
                    array_push($maybe_edit_group, $maybe_same_problem_name[$i]);
                }
        }
        //找出不含當前題目的其他題目，判斷其他題目的子題是否有包含 $not_allow，若包含$not_allow 代表該題目也無法當成子題加入
        $n = [];
        foreach($not_allow as $not){
            $n[] = $not->getName();
        }
        $count_not = count($n);
        
        
        for($i=0; $i<count($maybe_edit_group);$i++){
            
            $maybe[$i] = $maybe_edit_group[$i]->getProblemsGroup();
            $flag = 0;
            if(isset($n)){
            for($j=0; $j < $count_not ;$j++){
                for($k=0;$k<count($maybe[$i]);$k++){
                    if(isset($maybe[$i][$k])){
                    if($maybe[$i][$k] == $n[$j])
                        $flag = 1;}
                }
            }
        }
            if($flag == 0)
                array_push($edit_group, $maybe_edit_group[$i]);
          }
        
        
        //$edit_group 代表針對當前題目，允許被加入成為子題的題目，此步驟是將資料取出
          foreach($edit_group as $edit){
              $allow_edit[] = $edit->getName();
          }
          //$edit_group 包含當前題目，需將當前題目移除（自己不能加自己）
          for($i=0; $i<count($allow_edit);$i++){
              if($allow_edit[$i] == $get_this_problem_name)
                unset($allow_edit[$i]);
          }
          
          $allow_add = [];
          foreach($allow_edit as $allow){
              $allow_add[$allow] = $allow;
          }

        //while 正確版
       
        if(isset($not_allow)){
            foreach($not_allow as $no){
                $not_add[] = $no->getName();
            }
        }
        foreach($maybe_edit_group as $maybe){
            $maybe_add[] = $maybe->getProblemsGroup();

        }
        //problemsgroup form table
        $builder->add('problemsgroup', ChoiceType::class, [
            'multiple' => true,
            'required' => false,
            'label' => 'Problems Group',
            'choices' => $allow_add,
        ]);
        /*-------CCU-------*/

        
        $builder->add('save', SubmitType::class);

        //Remove clearProblemtext field when we do not have a problem text
        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) {
            /** @var Problem|null $problem */
            $problem = $event->getData();
            $form    = $event->getForm();

            if ($problem && !$problem->getProblemtext()) {
                $form->remove('clearProblemtext');
            }
        });
        /*
        $builder->get('subtask')->addEventListener(FormEvents::POST_SUBMIT,
        function (FormEvent $event) use ($formProblemModifier) {
            $contests = $event->getForm()->getData();
            $form  = $event->getForm()->getParent();
            $newsubtask = $form->get('subtask')->getData();
        });
*/

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class' => Problem::class]);
    }
}
