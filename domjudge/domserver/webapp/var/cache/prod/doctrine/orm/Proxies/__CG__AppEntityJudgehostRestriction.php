<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class JudgehostRestriction extends \App\Entity\JudgehostRestriction implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\JudgehostRestriction' . "\0" . 'restrictionid', '' . "\0" . 'App\\Entity\\JudgehostRestriction' . "\0" . 'name', '' . "\0" . 'App\\Entity\\JudgehostRestriction' . "\0" . 'restrictions', '' . "\0" . 'App\\Entity\\JudgehostRestriction' . "\0" . 'judgehosts'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\JudgehostRestriction' . "\0" . 'restrictionid', '' . "\0" . 'App\\Entity\\JudgehostRestriction' . "\0" . 'name', '' . "\0" . 'App\\Entity\\JudgehostRestriction' . "\0" . 'restrictions', '' . "\0" . 'App\\Entity\\JudgehostRestriction' . "\0" . 'judgehosts'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (JudgehostRestriction $proxy) {
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
    public function getRestrictionid()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getRestrictionid();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRestrictionid', []);

        return parent::getRestrictionid();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setRestrictions($restrictions)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRestrictions', [$restrictions]);

        return parent::setRestrictions($restrictions);
    }

    /**
     * {@inheritDoc}
     */
    public function getRestrictions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRestrictions', []);

        return parent::getRestrictions();
    }

    /**
     * {@inheritDoc}
     */
    public function setContests(array $contests)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContests', [$contests]);

        return parent::setContests($contests);
    }

    /**
     * {@inheritDoc}
     */
    public function getContests()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContests', []);

        return parent::getContests();
    }

    /**
     * {@inheritDoc}
     */
    public function setProblems(array $problems)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProblems', [$problems]);

        return parent::setProblems($problems);
    }

    /**
     * {@inheritDoc}
     */
    public function getProblems()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProblems', []);

        return parent::getProblems();
    }

    /**
     * {@inheritDoc}
     */
    public function setLanguages(array $languages)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLanguages', [$languages]);

        return parent::setLanguages($languages);
    }

    /**
     * {@inheritDoc}
     */
    public function getLanguages()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLanguages', []);

        return parent::getLanguages();
    }

    /**
     * {@inheritDoc}
     */
    public function setRejudgeOwn(bool $rejudgeOwn)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRejudgeOwn', [$rejudgeOwn]);

        return parent::setRejudgeOwn($rejudgeOwn);
    }

    /**
     * {@inheritDoc}
     */
    public function getRejudgeOwn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRejudgeOwn', []);

        return parent::getRejudgeOwn();
    }

    /**
     * {@inheritDoc}
     */
    public function addJudgehost(\App\Entity\Judgehost $judgehost)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addJudgehost', [$judgehost]);

        return parent::addJudgehost($judgehost);
    }

    /**
     * {@inheritDoc}
     */
    public function removeJudgehost(\App\Entity\Judgehost $judgehost)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeJudgehost', [$judgehost]);

        return parent::removeJudgehost($judgehost);
    }

    /**
     * {@inheritDoc}
     */
    public function getJudgehosts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJudgehosts', []);

        return parent::getJudgehosts();
    }

}
