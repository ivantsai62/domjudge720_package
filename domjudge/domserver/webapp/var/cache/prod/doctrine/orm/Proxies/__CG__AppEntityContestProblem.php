<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ContestProblem extends \App\Entity\ContestProblem implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\ContestProblem' . "\0" . 'shortname', '' . "\0" . 'App\\Entity\\ContestProblem' . "\0" . 'points', '' . "\0" . 'App\\Entity\\ContestProblem' . "\0" . 'allowSubmit', '' . "\0" . 'App\\Entity\\ContestProblem' . "\0" . 'allowJudge', '' . "\0" . 'App\\Entity\\ContestProblem' . "\0" . 'color', '' . "\0" . 'App\\Entity\\ContestProblem' . "\0" . 'lazyEvalResults', '' . "\0" . 'App\\Entity\\ContestProblem' . "\0" . 'contest', '' . "\0" . 'App\\Entity\\ContestProblem' . "\0" . 'problem', '' . "\0" . 'App\\Entity\\ContestProblem' . "\0" . 'submissions'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\ContestProblem' . "\0" . 'shortname', '' . "\0" . 'App\\Entity\\ContestProblem' . "\0" . 'points', '' . "\0" . 'App\\Entity\\ContestProblem' . "\0" . 'allowSubmit', '' . "\0" . 'App\\Entity\\ContestProblem' . "\0" . 'allowJudge', '' . "\0" . 'App\\Entity\\ContestProblem' . "\0" . 'color', '' . "\0" . 'App\\Entity\\ContestProblem' . "\0" . 'lazyEvalResults', '' . "\0" . 'App\\Entity\\ContestProblem' . "\0" . 'contest', '' . "\0" . 'App\\Entity\\ContestProblem' . "\0" . 'problem', '' . "\0" . 'App\\Entity\\ContestProblem' . "\0" . 'submissions'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ContestProblem $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getCid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCid', []);

        return parent::getCid();
    }

    /**
     * {@inheritDoc}
     */
    public function getProbid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProbid', []);

        return parent::getProbid();
    }

    /**
     * {@inheritDoc}
     */
    public function setShortname($shortname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShortname', [$shortname]);

        return parent::setShortname($shortname);
    }

    /**
     * {@inheritDoc}
     */
    public function getShortname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShortname', []);

        return parent::getShortname();
    }

    /**
     * {@inheritDoc}
     */
    public function setPoints($points)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPoints', [$points]);

        return parent::setPoints($points);
    }

    /**
     * {@inheritDoc}
     */
    public function getPoints()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPoints', []);

        return parent::getPoints();
    }

    /**
     * {@inheritDoc}
     */
    public function setAllowSubmit($allowSubmit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAllowSubmit', [$allowSubmit]);

        return parent::setAllowSubmit($allowSubmit);
    }

    /**
     * {@inheritDoc}
     */
    public function getAllowSubmit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAllowSubmit', []);

        return parent::getAllowSubmit();
    }

    /**
     * {@inheritDoc}
     */
    public function setAllowJudge($allowJudge)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAllowJudge', [$allowJudge]);

        return parent::setAllowJudge($allowJudge);
    }

    /**
     * {@inheritDoc}
     */
    public function getAllowJudge()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAllowJudge', []);

        return parent::getAllowJudge();
    }

    /**
     * {@inheritDoc}
     */
    public function setColor($color)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setColor', [$color]);

        return parent::setColor($color);
    }

    /**
     * {@inheritDoc}
     */
    public function getColor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getColor', []);

        return parent::getColor();
    }

    /**
     * {@inheritDoc}
     */
    public function setLazyEvalResults($lazyEvalResults)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLazyEvalResults', [$lazyEvalResults]);

        return parent::setLazyEvalResults($lazyEvalResults);
    }

    /**
     * {@inheritDoc}
     */
    public function getLazyEvalResults()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLazyEvalResults', []);

        return parent::getLazyEvalResults();
    }

    /**
     * {@inheritDoc}
     */
    public function setContest(\App\Entity\Contest $contest = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContest', [$contest]);

        return parent::setContest($contest);
    }

    /**
     * {@inheritDoc}
     */
    public function getContest()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContest', []);

        return parent::getContest();
    }

    /**
     * {@inheritDoc}
     */
    public function setProblem(\App\Entity\Problem $problem = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProblem', [$problem]);

        return parent::setProblem($problem);
    }

    /**
     * {@inheritDoc}
     */
    public function getProblem()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProblem', []);

        return parent::getProblem();
    }

    /**
     * {@inheritDoc}
     */
    public function addSubmission(\App\Entity\Submission $submission)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSubmission', [$submission]);

        return parent::addSubmission($submission);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSubmission(\App\Entity\Submission $submission)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSubmission', [$submission]);

        return parent::removeSubmission($submission);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubmissions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubmissions', []);

        return parent::getSubmissions();
    }

    /**
     * {@inheritDoc}
     */
    public function getExternalId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExternalId', []);

        return parent::getExternalId();
    }

    /**
     * {@inheritDoc}
     */
    public function getApiId(\App\Service\EventLogService $eventLogService)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApiId', [$eventLogService]);

        return parent::getApiId($eventLogService);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubtask()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubtask', []);

        return parent::getSubtask();
    }

}
