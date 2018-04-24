<?php

namespace Onesource\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Registrations StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Registrations extends AbstractStructBase
{
    /**
     * The BuyerRegistrations
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Onesource\StructType\BuyerRegistrations
     */
    public $BuyerRegistrations;
    /**
     * The SellerRegistrations
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Onesource\StructType\SellerRegistrations
     */
    public $SellerRegistrations;
    /**
     * Constructor method for Registrations
     * @uses Registrations::setBuyerRegistrations()
     * @uses Registrations::setSellerRegistrations()
     * @param \Onesource\StructType\BuyerRegistrations $buyerRegistrations
     * @param \Onesource\StructType\SellerRegistrations $sellerRegistrations
     */
    public function __construct(\Onesource\StructType\BuyerRegistrations $buyerRegistrations = null, \Onesource\StructType\SellerRegistrations $sellerRegistrations = null)
    {
        $this
            ->setBuyerRegistrations($buyerRegistrations)
            ->setSellerRegistrations($sellerRegistrations);
    }
    /**
     * Get BuyerRegistrations value
     * @return \Onesource\StructType\BuyerRegistrations|null
     */
    public function getBuyerRegistrations()
    {
        return $this->BuyerRegistrations;
    }
    /**
     * Set BuyerRegistrations value
     * @param \Onesource\StructType\BuyerRegistrations $buyerRegistrations
     * @return \Onesource\StructType\Registrations
     */
    public function setBuyerRegistrations(\Onesource\StructType\BuyerRegistrations $buyerRegistrations = null)
    {
        $this->BuyerRegistrations = $buyerRegistrations;
        return $this;
    }
    /**
     * Get SellerRegistrations value
     * @return \Onesource\StructType\SellerRegistrations|null
     */
    public function getSellerRegistrations()
    {
        return $this->SellerRegistrations;
    }
    /**
     * Set SellerRegistrations value
     * @param \Onesource\StructType\SellerRegistrations $sellerRegistrations
     * @return \Onesource\StructType\Registrations
     */
    public function setSellerRegistrations(\Onesource\StructType\SellerRegistrations $sellerRegistrations = null)
    {
        $this->SellerRegistrations = $sellerRegistrations;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Onesource\StructType\Registrations
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
