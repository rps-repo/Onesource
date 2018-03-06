<?php

namespace Onesource\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxSummary StructType
 * @subpackage Structs
 */
class TaxSummary extends AbstractStructBase
{
    /**
     * The EffectiveTaxRate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $EffectiveTaxRate;
    /**
     * The CalculatedTaxAmount
     * @var float
     */
    public $CalculatedTaxAmount;
    /**
     * The AccrualTaxAmount
     * @var float
     */
    public $AccrualTaxAmount;
    /**
     * The PartnerTaxAmount
     * @var float
     */
    public $PartnerTaxAmount;
    /**
     * The TaxableBasis
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $TaxableBasis;
    /**
     * The ExemptAmount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $ExemptAmount;
    /**
     * Constructor method for TaxSummary
     * @uses TaxSummary::setEffectiveTaxRate()
     * @uses TaxSummary::setCalculatedTaxAmount()
     * @uses TaxSummary::setAccrualTaxAmount()
     * @uses TaxSummary::setPartnerTaxAmount()
     * @uses TaxSummary::setTaxableBasis()
     * @uses TaxSummary::setExemptAmount()
     * @param float $effectiveTaxRate
     * @param float $calculatedTaxAmount
     * @param float $accrualTaxAmount
     * @param float $partnerTaxAmount
     * @param float $taxableBasis
     * @param float $exemptAmount
     */
    public function __construct($effectiveTaxRate = null, $calculatedTaxAmount = null, $accrualTaxAmount = null, $partnerTaxAmount = null, $taxableBasis = null, $exemptAmount = null)
    {
        $this
            ->setEffectiveTaxRate($effectiveTaxRate)
            ->setCalculatedTaxAmount($calculatedTaxAmount)
            ->setAccrualTaxAmount($accrualTaxAmount)
            ->setPartnerTaxAmount($partnerTaxAmount)
            ->setTaxableBasis($taxableBasis)
            ->setExemptAmount($exemptAmount);
    }
    /**
     * Get EffectiveTaxRate value
     * @return float|null
     */
    public function getEffectiveTaxRate()
    {
        return $this->EffectiveTaxRate;
    }
    /**
     * Set EffectiveTaxRate value
     * @param float $effectiveTaxRate
     * @return \Onesource\StructType\TaxSummary
     */
    public function setEffectiveTaxRate($effectiveTaxRate = null)
    {
        $this->EffectiveTaxRate = $effectiveTaxRate;
        return $this;
    }
    /**
     * Get CalculatedTaxAmount value
     * @return float|null
     */
    public function getCalculatedTaxAmount()
    {
        return $this->CalculatedTaxAmount;
    }
    /**
     * Set CalculatedTaxAmount value
     * @param float $calculatedTaxAmount
     * @return \Onesource\StructType\TaxSummary
     */
    public function setCalculatedTaxAmount($calculatedTaxAmount = null)
    {
        $this->CalculatedTaxAmount = $calculatedTaxAmount;
        return $this;
    }
    /**
     * Get AccrualTaxAmount value
     * @return float|null
     */
    public function getAccrualTaxAmount()
    {
        return $this->AccrualTaxAmount;
    }
    /**
     * Set AccrualTaxAmount value
     * @param float $accrualTaxAmount
     * @return \Onesource\StructType\TaxSummary
     */
    public function setAccrualTaxAmount($accrualTaxAmount = null)
    {
        $this->AccrualTaxAmount = $accrualTaxAmount;
        return $this;
    }
    /**
     * Get PartnerTaxAmount value
     * @return float|null
     */
    public function getPartnerTaxAmount()
    {
        return $this->PartnerTaxAmount;
    }
    /**
     * Set PartnerTaxAmount value
     * @param float $partnerTaxAmount
     * @return \Onesource\StructType\TaxSummary
     */
    public function setPartnerTaxAmount($partnerTaxAmount = null)
    {
        $this->PartnerTaxAmount = $partnerTaxAmount;
        return $this;
    }
    /**
     * Get TaxableBasis value
     * @return float|null
     */
    public function getTaxableBasis()
    {
        return $this->TaxableBasis;
    }
    /**
     * Set TaxableBasis value
     * @param float $taxableBasis
     * @return \Onesource\StructType\TaxSummary
     */
    public function setTaxableBasis($taxableBasis = null)
    {
        $this->TaxableBasis = $taxableBasis;
        return $this;
    }
    /**
     * Get ExemptAmount value
     * @return float|null
     */
    public function getExemptAmount()
    {
        return $this->ExemptAmount;
    }
    /**
     * Set ExemptAmount value
     * @param float $exemptAmount
     * @return \Onesource\StructType\TaxSummary
     */
    public function setExemptAmount($exemptAmount = null)
    {
        $this->ExemptAmount = $exemptAmount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Onesource\StructType\TaxSummary
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
