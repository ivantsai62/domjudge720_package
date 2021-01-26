<?php declare(strict_types=1);


namespace App\Form\Type;

use App\Entity\Language;
use App\Entity\Problem;
use App\Service\DOMJudgeService;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\Expr\Join;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Form;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

//新增函式庫
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormInterface;

class SubmitProblemType extends AbstractType
{
    /**
     * @var DOMJudgeService
     */
    protected $dj;

    /**
     * @var EntityManagerInterface
     */
    protected $em;

    public function __construct(DOMJudgeService $dj, EntityManagerInterface $em)
    {
        $this->dj = $dj;
        $this->em = $em;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    
        
        $allowMultipleFiles = $this->dj->dbconfig_get('sourcefiles_limit', 100) > 1;
        $user               = $this->dj->getUser();
        $contest            = $this->dj->getCurrentContest($user->getTeamid());

        $builder->add('code', BootstrapFileType::class, [
            'label' => 'Source file' . ($allowMultipleFiles ? 's' : ''),
            'multiple' => $allowMultipleFiles,
        ]);

        dump($options);

        $builder->add('problem', EntityType::class, [
            'class' => Problem::class,
            'query_builder' => function (EntityRepository $er) use ($contest) {
                return $er->createQueryBuilder('p')
                    ->join('p.contest_problems', 'cp', Join::WITH, 'cp.contest = :contest')
                    ->select('p', 'cp')
                    ->andWhere('cp.allowSubmit = 1')
                    ->setParameter(':contest', $contest)
                    ->addOrderBy('cp.shortname');
            },
            'choice_label' => function (Problem $problem) {
                return sprintf('%s - %s', $problem->getContestProblems()->first()->getShortName(), $problem->getName());
            },
            'placeholder' => 'Select a problem',
            
        ]);


        // $builder->add('restrictionlanguage',ChoiceType::class, [
        //     'choices' => [ 'C++'=> true],
        //     'placeholder' => 'This problem have restricition language',
        //     'label' => 'Restriction language',
        //     ]);
        


        $builder->add('language', EntityType::class, [
            'class' => Language::class,
            'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('l')
                    ->andWhere('l.allowSubmit = 1');
            },
            
            'choice_label' => 'name',
            'placeholder' => 'Select a language',
         ]);

     


        //新增測試
        /*
        $builder ->addEventListener(
            FormEvents::PRE_SET_DATA,
            [$this, 'onPreSetData']
        );
        */
        // $builder
        //     ->add('problem', EntityType::class, [
        //         'class'       => Problem::class,
        //         'placeholder' => '',
        //         'choice_label' => 'name',
        //     ]);
        
            
        //上
        $builder->add('entry_point', TextType::class, [
            'label' => 'Entry point',
            'required' => false,
            'help' => 'The entry point for your code.',
            'constraints' => [
                new Callback(function ($value, ExecutionContextInterface $context) {
                    /** @var Form $form */

                    $form = $context->getRoot();
                    /** @var Language $language */
                    $langid = $form->get('language')->getData();
                    dump($langid);
                     if($langid != null)
                     {
                        $language = $this->em->createQueryBuilder()
                        ->from(Language::class, 'l')
                        ->select('l')
                        ->andWhere('l.langid = :langid')
                        ->setParameter(':langid', $langid)
                        ->getQuery()
                        ->getResult();
                        
                     if ($language[0]->getRequireEntryPoint() && empty($value)) {
                         $message = sprintf('%s required, but not specified',
                                            $language[0]->getEntryPointDescription() ?: 'Entry point');
                         $context
                             ->buildViolation($message)
                             ->atPath('entry_point')
                             ->addViolation();
                     }
                    }
                }),
            ]
        ]);

        $formProblemModifier = function (FormInterface $form, $contests = []) {
            /** @var Contest[] $contests */
            $problems = $this->em->createQueryBuilder()
                ->from(Problem::class, 'p')
                ->join('p.contest_problems', 'cp')
                ->select('p')
                ->andWhere('cp.problem IN (:contests)')
                ->setParameter(':contests', $contests)
                ->addOrderBy('p.name')
                ->getQuery()
                ->getResult();
                $problem2 = $this->em->createQueryBuilder()
                    ->from(Language::class, 'l')
                    ->select('l')
                    ->andWhere('l.allowSubmit = 1')
                    ->getQuery()
                    ->getResult();
                foreach ($problems as $problem){
                    $ids = $problem->getRestrictionLanguages();
                }
                if($ids == [])
                {
                    
                    $i = 0;
                    $problems = $this->em->createQueryBuilder()
                    ->from(Language::class, 'l')
                    ->select('l')
                    ->andWhere('l.allowSubmit = 1')
                    ->getQuery()
                    ->getResult();
                    $ids= [];
                    foreach ($problem2 as $problem){
                        array_push($ids,$problem->getName());
                    }
                }
                
                $newid = [];
                foreach ($ids as $id)
                {
                    $problem3 = $this->em->createQueryBuilder()
                    ->from(Language::class, 'l')
                    ->select('l')
                    ->andWhere('l.allowSubmit = 1')
                    ->andWhere('l.name = :id')
                    ->setParameter(':id', $id)
                    ->getQuery()
                    ->getResult();
                    $newid = $newid + array($id => $problem3[0]->getLangid());
                    
                }
                
                dump($newid);
                dump($ids);
                
                $form->add('language', ChoiceType::class, [
                    'required' => false,
                    'choices' => $newid,
                    'placeholder' => 'Select a language',
                ]);
                
                /*
            $form->add('problems', EntityType::class, [
                'multiple' => true,
                'label' => 'Problem',
                'class' => Problem::class,
                'required' => false,
                'choice_label' => 'probid',
                'choices' => $problems,
            ]);
            */
        };
        /*
        $builder->addEventListener(FormEvents::PRE_SET_DATA,
        function (FormEvent $event) use ($formProblemModifier) {
            $data = $event->getData();
           // dump($data);
            $formProblemModifier($event->getForm(), $data['problem'] ?? []);
        }
    );*/
    
    $builder->get('problem')->addEventListener(FormEvents::POST_SUBMIT,
    function (FormEvent $event) use ($formProblemModifier) {
        $contests = $event->getForm()->getData();
        dump($contests);
        $formProblemModifier($event->getForm()->getParent(), $contests);
    });

    
    }

    public function onPreSetData(FormEvent $event)
    {
        // ...
        $product = $event->getData();
        $form = $event->getForm();
        //$data = $event->getProbid();
        dump($product);
        // checks if the Product object is "new"
        // If no data is passed to the form, the data is "null".
        // This should be considered a new "Product"
        if (!$product || null === $product->getId()) {
            $form->add('name', TextType::class);
        }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
       // $resolver->setDefaults(['data_class' => Problem::class]);
    }
}
