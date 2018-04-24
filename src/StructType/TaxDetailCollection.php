<?php

namespace Onesource\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxDetailCollection StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TaxDetailCollection extends AbstractStructBase
{
    /**
     * The TaxDetail
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Onesource\StructType\TaxDetail[]
     */
    public $TaxDetail;
    /**
     * Constructor method for TaxDetailCollection
     * @uses TaxDetailCollection::setTaxDetail()
     * @param \Onesource\StructType\TaxDetail[] $taxDetail
     */
    public function __construct(array $taxDetail = array())
    {
        $this
            ->setTaxDetail($taxDetail);
    }
    /**
     * Get TaxDetail value
     * @return \Onesource\StructType\TaxDetail[]|null
     */
    public function getTaxDetail()
    {
        return $this->TaxDetail;
    }
    /**
     * Set TaxDetail value
     * @throws \InvalidArgumentException
     * @param \Onesource\StructType\TaxDetail[] $taxDetail
     * @return \Onesource\StructType\TaxDetailCollection
     */
    public function setTaxDetail(array $taxDetail = array())
    {
        foreach ($taxDetail as $taxDetailCollectionTaxDetailItem) {
            // validation for constraint: itemType
            if (!$taxDetailCollectionTaxDetailItem instanceof \Onesource\StructType\TaxDetail) {
                throw new \InvalidArgumentException(sprintf('The TaxDetail property can only contain items of \Onesource\StructType\TaxDetail, "%s" given', is_object($taxDetailCollectionTaxDetailItem) ? get_class($taxDetailCollectionTaxDetailItem) : gettype($taxDetailCollectionTaxDetailItem)), __LINE__);
            }
        }
        $this->TaxDetail = $taxDetail;
        return $this;
    }
    /**
     * Add item to TaxDetail value
     * @throws \InvalidArgumentException
     * @param \Onesource\StructType\TaxDetail $item
     * @return \Onesource\StructType\TaxDetailCollection
     */
    public function addToTaxDetail(\Onesource\StructType\TaxDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Onesource\StructType\TaxDetail) {
            throw new \InvalidArgumentException(sprintf('The TaxDetail property can only contain items of \Onesource\StructType\TaxDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TaxDetail[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Onesource\StructType\TaxDetailCollection
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
