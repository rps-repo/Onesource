<?php

namespace Onesource\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ZoneTaxSummary StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ZoneTaxSummary extends AbstractStructBase
{
    /**
     * The SummarizationLevel
     * @var string
     */
    public $SummarizationLevel;
    /**
     * The TaxableBasis
     * @var float
     */
    public $TaxableBasis;
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
     * The TaxRate
     * @var float
     */
    public $TaxRate;
    /**
     * The ExemptAmount
     * @var float
     */
    public $ExemptAmount;
    /**
     * Constructor method for ZoneTaxSummary
     * @uses ZoneTaxSummary::setSummarizationLevel()
     * @uses ZoneTaxSummary::setTaxableBasis()
     * @uses ZoneTaxSummary::setCalculatedTaxAmount()
     * @uses ZoneTaxSummary::setAccrualTaxAmount()
     * @uses ZoneTaxSummary::setPartnerTaxAmount()
     * @uses ZoneTaxSummary::setTaxRate()
     * @uses ZoneTaxSummary::setExemptAmount()
     * @param string $summarizationLevel
     * @param float $taxableBasis
     * @param float $calculatedTaxAmount
     * @param float $accrualTaxAmount
     * @param float $partnerTaxAmount
     * @param float $taxRate
     * @param float $exemptAmount
     */
    public function __construct($summarizationLevel = null, $taxableBasis = null, $calculatedTaxAmount = null, $accrualTaxAmount = null, $partnerTaxAmount = null, $taxRate = null, $exemptAmount = null)
    {
        $this
            ->setSummarizationLevel($summarizationLevel)
            ->setTaxableBasis($taxableBasis)
            ->setCalculatedTaxAmount($calculatedTaxAmount)
            ->setAccrualTaxAmount($accrualTaxAmount)
            ->setPartnerTaxAmount($partnerTaxAmount)
            ->setTaxRate($taxRate)
            ->setExemptAmount($exemptAmount);
    }
    /**
     * Get SummarizationLevel value
     * @return string|null
     */
    public function getSummarizationLevel()
    {
        return $this->SummarizationLevel;
    }
    /**
     * Set SummarizationLevel value
     * @param string $summarizationLevel
     * @return \Onesource\StructType\ZoneTaxSummary
     */
    public function setSummarizationLevel($summarizationLevel = null)
    {
        // validation for constraint: string
        if (!is_null($summarizationLevel) && !is_string($summarizationLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($summarizationLevel)), __LINE__);
        }
        $this->SummarizationLevel = $summarizationLevel;
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
     * @return \Onesource\StructType\ZoneTaxSummary
     */
    public function setTaxableBasis($taxableBasis = null)
    {
        $this->TaxableBasis = $taxableBasis;
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
     * @return \Onesource\StructType\ZoneTaxSummary
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
     * @return \Onesource\StructType\ZoneTaxSummary
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
     * @return \Onesource\StructType\ZoneTaxSummary
     */
    public function setPartnerTaxAmount($partnerTaxAmount = null)
    {
        $this->PartnerTaxAmount = $partnerTaxAmount;
        return $this;
    }
    /**
     * Get TaxRate value
     * @return float|null
     */
    public function getTaxRate()
    {
        return $this->TaxRate;
    }
    /**
     * Set TaxRate value
     * @param float $taxRate
     * @return \Onesource\StructType\ZoneTaxSummary
     */
    public function setTaxRate($taxRate = null)
    {
        $this->TaxRate = $taxRate;
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
     * @return \Onesource\StructType\ZoneTaxSummary
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
     * @return \Onesource\StructType\ZoneTaxSummary
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
