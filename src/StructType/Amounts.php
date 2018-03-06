<?php

namespace Onesource\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Amounts StructType
 * @subpackage Structs
 */
class Amounts extends AbstractStructBase
{
    /**
     * The GrossAmount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $GrossAmount;
    /**
     * The GrossPlusTaxAmount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $GrossPlusTaxAmount;
    /**
     * The TaxAmount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $TaxAmount;
    /**
     * Constructor method for Amounts
     * @uses Amounts::setGrossAmount()
     * @uses Amounts::setGrossPlusTaxAmount()
     * @uses Amounts::setTaxAmount()
     * @param float $grossAmount
     * @param float $grossPlusTaxAmount
     * @param float $taxAmount
     */
    public function __construct($grossAmount = null, $grossPlusTaxAmount = null, $taxAmount = null)
    {
        $this
            ->setGrossAmount($grossAmount)
            ->setGrossPlusTaxAmount($grossPlusTaxAmount)
            ->setTaxAmount($taxAmount);
    }
    /**
     * Get GrossAmount value
     * @return float|null
     */
    public function getGrossAmount()
    {
        return $this->GrossAmount;
    }
    /**
     * Set GrossAmount value
     * @param float $grossAmount
     * @return \Onesource\StructType\Amounts
     */
    public function setGrossAmount($grossAmount = null)
    {
        $this->GrossAmount = $grossAmount;
        return $this;
    }
    /**
     * Get GrossPlusTaxAmount value
     * @return float|null
     */
    public function getGrossPlusTaxAmount()
    {
        return $this->GrossPlusTaxAmount;
    }
    /**
     * Set GrossPlusTaxAmount value
     * @param float $grossPlusTaxAmount
     * @return \Onesource\StructType\Amounts
     */
    public function setGrossPlusTaxAmount($grossPlusTaxAmount = null)
    {
        $this->GrossPlusTaxAmount = $grossPlusTaxAmount;
        return $this;
    }
    /**
     * Get TaxAmount value
     * @return float|null
     */
    public function getTaxAmount()
    {
        return $this->TaxAmount;
    }
    /**
     * Set TaxAmount value
     * @param float $taxAmount
     * @return \Onesource\StructType\Amounts
     */
    public function setTaxAmount($taxAmount = null)
    {
        $this->TaxAmount = $taxAmount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Onesource\StructType\Amounts
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
