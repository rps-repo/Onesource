<?php

namespace Onesource\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChargeDetailCollection StructType
 * @subpackage Structs
 */
class ChargeDetailCollection extends AbstractStructBase
{
    /**
     * The Charges
     * Meta informations extracted from the WSDL
     * - maxOccurs: 9
     * @var \Onesource\StructType\ChargeDetail[]
     */
    public $Charges;
    /**
     * Constructor method for ChargeDetailCollection
     * @uses ChargeDetailCollection::setCharges()
     * @param \Onesource\StructType\ChargeDetail[] $charges
     */
    public function __construct(array $charges = array())
    {
        $this
            ->setCharges($charges);
    }
    /**
     * Get Charges value
     * @return \Onesource\StructType\ChargeDetail[]|null
     */
    public function getCharges()
    {
        return $this->Charges;
    }
    /**
     * Set Charges value
     * @throws \InvalidArgumentException
     * @param \Onesource\StructType\ChargeDetail[] $charges
     * @return \Onesource\StructType\ChargeDetailCollection
     */
    public function setCharges(array $charges = array())
    {
        foreach ($charges as $chargeDetailCollectionChargesItem) {
            // validation for constraint: itemType
            if (!$chargeDetailCollectionChargesItem instanceof \Onesource\StructType\ChargeDetail) {
                throw new \InvalidArgumentException(sprintf('The Charges property can only contain items of \Onesource\StructType\ChargeDetail, "%s" given', is_object($chargeDetailCollectionChargesItem) ? get_class($chargeDetailCollectionChargesItem) : gettype($chargeDetailCollectionChargesItem)), __LINE__);
            }
        }
        $this->Charges = $charges;
        return $this;
    }
    /**
     * Add item to Charges value
     * @throws \InvalidArgumentException
     * @param \Onesource\StructType\ChargeDetail $item
     * @return \Onesource\StructType\ChargeDetailCollection
     */
    public function addToCharges(\Onesource\StructType\ChargeDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Onesource\StructType\ChargeDetail) {
            throw new \InvalidArgumentException(sprintf('The Charges property can only contain items of \Onesource\StructType\ChargeDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Charges[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Onesource\StructType\ChargeDetailCollection
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
