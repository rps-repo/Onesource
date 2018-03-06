<?php

namespace Onesource\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ZoneTaxCollection StructType
 * @subpackage Structs
 */
class ZoneTaxCollection extends AbstractStructBase
{
    /**
     * The ZoneTaxSummary
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Onesource\StructType\ZoneTaxSummary[]
     */
    public $ZoneTaxSummary;
    /**
     * Constructor method for ZoneTaxCollection
     * @uses ZoneTaxCollection::setZoneTaxSummary()
     * @param \Onesource\StructType\ZoneTaxSummary[] $zoneTaxSummary
     */
    public function __construct(array $zoneTaxSummary = array())
    {
        $this
            ->setZoneTaxSummary($zoneTaxSummary);
    }
    /**
     * Get ZoneTaxSummary value
     * @return \Onesource\StructType\ZoneTaxSummary[]|null
     */
    public function getZoneTaxSummary()
    {
        return $this->ZoneTaxSummary;
    }
    /**
     * Set ZoneTaxSummary value
     * @throws \InvalidArgumentException
     * @param \Onesource\StructType\ZoneTaxSummary[] $zoneTaxSummary
     * @return \Onesource\StructType\ZoneTaxCollection
     */
    public function setZoneTaxSummary(array $zoneTaxSummary = array())
    {
        foreach ($zoneTaxSummary as $zoneTaxCollectionZoneTaxSummaryItem) {
            // validation for constraint: itemType
            if (!$zoneTaxCollectionZoneTaxSummaryItem instanceof \Onesource\StructType\ZoneTaxSummary) {
                throw new \InvalidArgumentException(sprintf('The ZoneTaxSummary property can only contain items of \Onesource\StructType\ZoneTaxSummary, "%s" given', is_object($zoneTaxCollectionZoneTaxSummaryItem) ? get_class($zoneTaxCollectionZoneTaxSummaryItem) : gettype($zoneTaxCollectionZoneTaxSummaryItem)), __LINE__);
            }
        }
        $this->ZoneTaxSummary = $zoneTaxSummary;
        return $this;
    }
    /**
     * Add item to ZoneTaxSummary value
     * @throws \InvalidArgumentException
     * @param \Onesource\StructType\ZoneTaxSummary $item
     * @return \Onesource\StructType\ZoneTaxCollection
     */
    public function addToZoneTaxSummary(\Onesource\StructType\ZoneTaxSummary $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Onesource\StructType\ZoneTaxSummary) {
            throw new \InvalidArgumentException(sprintf('The ZoneTaxSummary property can only contain items of \Onesource\StructType\ZoneTaxSummary, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ZoneTaxSummary[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Onesource\StructType\ZoneTaxCollection
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
