<?php

namespace Onesource\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxLineCollection StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TaxLineCollection extends AbstractStructBase
{
    /**
     * The TaxLine
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Onesource\StructType\TaxLine[]
     */
    public $TaxLine;
    /**
     * Constructor method for TaxLineCollection
     * @uses TaxLineCollection::setTaxLine()
     * @param \Onesource\StructType\TaxLine[] $taxLine
     */
    public function __construct(array $taxLine = array())
    {
        $this
            ->setTaxLine($taxLine);
    }
    /**
     * Get TaxLine value
     * @return \Onesource\StructType\TaxLine[]|null
     */
    public function getTaxLine()
    {
        return $this->TaxLine;
    }
    /**
     * Set TaxLine value
     * @throws \InvalidArgumentException
     * @param \Onesource\StructType\TaxLine[] $taxLine
     * @return \Onesource\StructType\TaxLineCollection
     */
    public function setTaxLine(array $taxLine = array())
    {
        foreach ($taxLine as $taxLineCollectionTaxLineItem) {
            // validation for constraint: itemType
            if (!$taxLineCollectionTaxLineItem instanceof \Onesource\StructType\TaxLine) {
                throw new \InvalidArgumentException(sprintf('The TaxLine property can only contain items of \Onesource\StructType\TaxLine, "%s" given', is_object($taxLineCollectionTaxLineItem) ? get_class($taxLineCollectionTaxLineItem) : gettype($taxLineCollectionTaxLineItem)), __LINE__);
            }
        }
        $this->TaxLine = $taxLine;
        return $this;
    }
    /**
     * Add item to TaxLine value
     * @throws \InvalidArgumentException
     * @param \Onesource\StructType\TaxLine $item
     * @return \Onesource\StructType\TaxLineCollection
     */
    public function addToTaxLine(\Onesource\StructType\TaxLine $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Onesource\StructType\TaxLine) {
            throw new \InvalidArgumentException(sprintf('The TaxLine property can only contain items of \Onesource\StructType\TaxLine, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TaxLine[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Onesource\StructType\TaxLineCollection
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
