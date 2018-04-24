<?php

namespace Onesource\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChargeCollection StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ChargeCollection extends AbstractStructBase
{
    /**
     * The Charge
     * Meta informations extracted from the WSDL
     * - id: Charges
     * - maxOccurs: 9
     * - minOccurs: 1
     * @var \Onesource\StructType\Charge[]
     */
    public $Charge;
    /**
     * The ProcessingOption
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ProcessingOption;
    /**
     * Constructor method for ChargeCollection
     * @uses ChargeCollection::setCharge()
     * @uses ChargeCollection::setProcessingOption()
     * @param \Onesource\StructType\Charge[] $charge
     * @param string $processingOption
     */
    public function __construct(array $charge = array(), $processingOption = null)
    {
        $this
            ->setCharge($charge)
            ->setProcessingOption($processingOption);
    }
    /**
     * Get Charge value
     * @return \Onesource\StructType\Charge[]
     */
    public function getCharge()
    {
        return $this->Charge;
    }
    /**
     * Set Charge value
     * @throws \InvalidArgumentException
     * @param \Onesource\StructType\Charge[] $charge
     * @return \Onesource\StructType\ChargeCollection
     */
    public function setCharge(array $charge = array())
    {
        foreach ($charge as $chargeCollectionChargeItem) {
            // validation for constraint: itemType
            if (!$chargeCollectionChargeItem instanceof \Onesource\StructType\Charge) {
                throw new \InvalidArgumentException(sprintf('The Charge property can only contain items of \Onesource\StructType\Charge, "%s" given', is_object($chargeCollectionChargeItem) ? get_class($chargeCollectionChargeItem) : gettype($chargeCollectionChargeItem)), __LINE__);
            }
        }
        $this->Charge = $charge;
        return $this;
    }
    /**
     * Add item to Charge value
     * @throws \InvalidArgumentException
     * @param \Onesource\StructType\Charge $item
     * @return \Onesource\StructType\ChargeCollection
     */
    public function addToCharge(\Onesource\StructType\Charge $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Onesource\StructType\Charge) {
            throw new \InvalidArgumentException(sprintf('The Charge property can only contain items of \Onesource\StructType\Charge, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Charge[] = $item;
        return $this;
    }
    /**
     * Get ProcessingOption value
     * @return string
     */
    public function getProcessingOption()
    {
        return $this->ProcessingOption;
    }
    /**
     * Set ProcessingOption value
     * @uses \Onesource\EnumType\ProcessingOption::valueIsValid()
     * @uses \Onesource\EnumType\ProcessingOption::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $processingOption
     * @return \Onesource\StructType\ChargeCollection
     */
    public function setProcessingOption($processingOption = null)
    {
        // validation for constraint: enumeration
        if (!\Onesource\EnumType\ProcessingOption::valueIsValid($processingOption)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $processingOption, implode(', ', \Onesource\EnumType\ProcessingOption::getValidValues())), __LINE__);
        }
        $this->ProcessingOption = $processingOption;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Onesource\StructType\ChargeCollection
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
