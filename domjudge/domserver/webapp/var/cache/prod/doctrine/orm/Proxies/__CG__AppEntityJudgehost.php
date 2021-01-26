<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Judgehost extends \App\Entity\Judgehost implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Judgehost' . "\0" . 'hostname', '' . "\0" . 'App\\Entity\\Judgehost' . "\0" . 'active', '' . "\0" . 'App\\Entity\\Judgehost' . "\0" . 'polltime', '' . "\0" . 'App\\Entity\\Judgehost' . "\0" . 'restrictionid', '' . "\0" . 'App\\Entity\\Judgehost' . "\0" . 'restriction', '' . "\0" . 'App\\Entity\\Judgehost' . "\0" . 'judgings'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Judgehost' . "\0" . 'hostname', '' . "\0" . 'App\\Entity\\Judgehost' . "\0" . 'active', '' . "\0" . 'App\\Entity\\Judgehost' . "\0" . 'polltime', '' . "\0" . 'App\\Entity\\Judgehost' . "\0" . 'restrictionid', '' . "\0" . 'App\\Entity\\Judgehost' . "\0" . 'restriction', '' . "\0" . 'App\\Entity\\Judgehost' . "\0" . 'judgings'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Judgehost $proxy) {
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
    public function setHostname($hostname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHostname', [$hostname]);

        return parent::setHostname($hostname);
    }

    /**
     * {@inheritDoc}
     */
    public function getHostname()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getHostname();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHostname', []);

        return parent::getHostname();
    }

    /**
     * {@inheritDoc}
     */
    public function setActive($active)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActive', [$active]);

        return parent::setActive($active);
    }

    /**
     * {@inheritDoc}
     */
    public function getActive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActive', []);

        return parent::getActive();
    }

    /**
     * {@inheritDoc}
     */
    public function setPolltime($polltime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPolltime', [$polltime]);

        return parent::setPolltime($polltime);
    }

    /**
     * {@inheritDoc}
     */
    public function getPolltime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPolltime', []);

        return parent::getPolltime();
    }

    /**
     * {@inheritDoc}
     */
    public function setRestrictionid($restrictionid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRestrictionid', [$restrictionid]);

        return parent::setRestrictionid($restrictionid);
    }

    /**
     * {@inheritDoc}
     */
    public function getRestrictionid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRestrictionid', []);

        return parent::getRestrictionid();
    }

    /**
     * {@inheritDoc}
     */
    public function setRestriction(\App\Entity\JudgehostRestriction $restriction = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRestriction', [$restriction]);

        return parent::setRestriction($restriction);
    }

    /**
     * {@inheritDoc}
     */
    public function getRestriction()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRestriction', []);

        return parent::getRestriction();
    }

    /**
     * {@inheritDoc}
     */
    public function addJudging(\App\Entity\Judging $judging)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addJudging', [$judging]);

        return parent::addJudging($judging);
    }

    /**
     * {@inheritDoc}
     */
    public function removeJudging(\App\Entity\Judging $judging)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeJudging', [$judging]);

        return parent::removeJudging($judging);
    }

    /**
     * {@inheritDoc}
     */
    public function getJudgings()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJudgings', []);

        return parent::getJudgings();
    }

}
