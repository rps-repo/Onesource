<?php

namespace Onesource\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerRegistrations StructType
 * @subpackage Structs
 */
class SellerRegistrations extends AbstractStructBase
{
    /**
     * The Registration
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \Onesource\StructType\Registration[]
     */
    public $Registration;
    /**
     * Constructor method for SellerRegistrations
     * @uses SellerRegistrations::setRegistration()
     * @param \Onesource\StructType\Registration[] $registration
     */
    public function __construct(array $registration = array())
    {
        $this
            ->setRegistration($registration);
    }
    /**
     * Get Registration value
     * @return \Onesource\StructType\Registration[]
     */
    public function getRegistration()
    {
        return $this->Registration;
    }
    /**
     * Set Registration value
     * @throws \InvalidArgumentException
     * @param \Onesource\StructType\Registration[] $registration
     * @return \Onesource\StructType\SellerRegistrations
     */
    public function setRegistration(array $registration = array())
    {
        foreach ($registration as $sellerRegistrationsRegistrationItem) {
            // validation for constraint: itemType
            if (!$sellerRegistrationsRegistrationItem instanceof \Onesource\StructType\Registration) {
                throw new \InvalidArgumentException(sprintf('The Registration property can only contain items of \Onesource\StructType\Registration, "%s" given', is_object($sellerRegistrationsRegistrationItem) ? get_class($sellerRegistrationsRegistrationItem) : gettype($sellerRegistrationsRegistrationItem)), __LINE__);
            }
        }
        $this->Registration = $registration;
        return $this;
    }
    /**
     * Add item to Registration value
     * @throws \InvalidArgumentException
     * @param \Onesource\StructType\Registration $item
     * @return \Onesource\StructType\SellerRegistrations
     */
    public function addToRegistration(\Onesource\StructType\Registration $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Onesource\StructType\Registration) {
            throw new \InvalidArgumentException(sprintf('The Registration property can only contain items of \Onesource\StructType\Registration, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Registration[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Onesource\StructType\SellerRegistrations
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
