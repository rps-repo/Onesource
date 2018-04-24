<?php

namespace Onesource\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxDetail StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TaxDetail extends AbstractStructBase
{
    /**
     * The AuthorityName
     * Meta informations extracted from the WSDL
     * - maxLength: 100
     * @var string
     */
    public $AuthorityName;
    /**
     * The AuthorityType
     * @var string
     */
    public $AuthorityType;
    /**
     * The AuthorityUUID
     * Meta informations extracted from the WSDL
     * - maxLength: 36
     * @var string
     */
    public $AuthorityUUID;
    /**
     * The TaxType
     * Meta informations extracted from the WSDL
     * - maxLength: 3
     * @var string
     */
    public $TaxType;
    /**
     * The EffectiveZoneLevel
     * @var string
     */
    public $EffectiveZoneLevel;
    /**
     * The TaxableBasis
     * @var float
     */
    public $TaxableBasis;
    /**
     * The TaxableCountry
     * @var string
     */
    public $TaxableCountry;
    /**
     * The TaxableRegion
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TaxableRegion;
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
     * The Registrations
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Onesource\StructType\Registrations
     */
    public $Registrations;
    /**
     * Constructor method for TaxDetail
     * @uses TaxDetail::setAuthorityName()
     * @uses TaxDetail::setAuthorityType()
     * @uses TaxDetail::setAuthorityUUID()
     * @uses TaxDetail::setTaxType()
     * @uses TaxDetail::setEffectiveZoneLevel()
     * @uses TaxDetail::setTaxableBasis()
     * @uses TaxDetail::setTaxableCountry()
     * @uses TaxDetail::setTaxableRegion()
     * @uses TaxDetail::setCalculatedTaxAmount()
     * @uses TaxDetail::setAccrualTaxAmount()
     * @uses TaxDetail::setPartnerTaxAmount()
     * @uses TaxDetail::setTaxRate()
     * @uses TaxDetail::setExemptAmount()
     * @uses TaxDetail::setRegistrations()
     * @param string $authorityName
     * @param string $authorityType
     * @param string $authorityUUID
     * @param string $taxType
     * @param string $effectiveZoneLevel
     * @param float $taxableBasis
     * @param string $taxableCountry
     * @param string $taxableRegion
     * @param float $calculatedTaxAmount
     * @param float $accrualTaxAmount
     * @param float $partnerTaxAmount
     * @param float $taxRate
     * @param float $exemptAmount
     * @param \Onesource\StructType\Registrations $registrations
     */
    public function __construct($authorityName = null, $authorityType = null, $authorityUUID = null, $taxType = null, $effectiveZoneLevel = null, $taxableBasis = null, $taxableCountry = null, $taxableRegion = null, $calculatedTaxAmount = null, $accrualTaxAmount = null, $partnerTaxAmount = null, $taxRate = null, $exemptAmount = null, \Onesource\StructType\Registrations $registrations = null)
    {
        $this
            ->setAuthorityName($authorityName)
            ->setAuthorityType($authorityType)
            ->setAuthorityUUID($authorityUUID)
            ->setTaxType($taxType)
            ->setEffectiveZoneLevel($effectiveZoneLevel)
            ->setTaxableBasis($taxableBasis)
            ->setTaxableCountry($taxableCountry)
            ->setTaxableRegion($taxableRegion)
            ->setCalculatedTaxAmount($calculatedTaxAmount)
            ->setAccrualTaxAmount($accrualTaxAmount)
            ->setPartnerTaxAmount($partnerTaxAmount)
            ->setTaxRate($taxRate)
            ->setExemptAmount($exemptAmount)
            ->setRegistrations($registrations);
    }
    /**
     * Get AuthorityName value
     * @return string|null
     */
    public function getAuthorityName()
    {
        return $this->AuthorityName;
    }
    /**
     * Set AuthorityName value
     * @param string $authorityName
     * @return \Onesource\StructType\TaxDetail
     */
    public function setAuthorityName($authorityName = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($authorityName) && strlen($authorityName) > 100) || (is_array($authorityName) && count($authorityName) > 100)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 100 element(s) or a scalar of 100 character(s) at most, "%d" length given', is_scalar($authorityName) ? strlen($authorityName) : count($authorityName)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($authorityName) && !is_string($authorityName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($authorityName)), __LINE__);
        }
        $this->AuthorityName = $authorityName;
        return $this;
    }
    /**
     * Get AuthorityType value
     * @return string|null
     */
    public function getAuthorityType()
    {
        return $this->AuthorityType;
    }
    /**
     * Set AuthorityType value
     * @param string $authorityType
     * @return \Onesource\StructType\TaxDetail
     */
    public function setAuthorityType($authorityType = null)
    {
        // validation for constraint: string
        if (!is_null($authorityType) && !is_string($authorityType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($authorityType)), __LINE__);
        }
        $this->AuthorityType = $authorityType;
        return $this;
    }
    /**
     * Get AuthorityUUID value
     * @return string|null
     */
    public function getAuthorityUUID()
    {
        return $this->AuthorityUUID;
    }
    /**
     * Set AuthorityUUID value
     * @param string $authorityUUID
     * @return \Onesource\StructType\TaxDetail
     */
    public function setAuthorityUUID($authorityUUID = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($authorityUUID) && strlen($authorityUUID) > 36) || (is_array($authorityUUID) && count($authorityUUID) > 36)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 36 element(s) or a scalar of 36 character(s) at most, "%d" length given', is_scalar($authorityUUID) ? strlen($authorityUUID) : count($authorityUUID)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($authorityUUID) && !is_string($authorityUUID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($authorityUUID)), __LINE__);
        }
        $this->AuthorityUUID = $authorityUUID;
        return $this;
    }
    /**
     * Get TaxType value
     * @return string|null
     */
    public function getTaxType()
    {
        return $this->TaxType;
    }
    /**
     * Set TaxType value
     * @param string $taxType
     * @return \Onesource\StructType\TaxDetail
     */
    public function setTaxType($taxType = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($taxType) && strlen($taxType) > 3) || (is_array($taxType) && count($taxType) > 3)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 3 element(s) or a scalar of 3 character(s) at most, "%d" length given', is_scalar($taxType) ? strlen($taxType) : count($taxType)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($taxType) && !is_string($taxType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($taxType)), __LINE__);
        }
        $this->TaxType = $taxType;
        return $this;
    }
    /**
     * Get EffectiveZoneLevel value
     * @return string|null
     */
    public function getEffectiveZoneLevel()
    {
        return $this->EffectiveZoneLevel;
    }
    /**
     * Set EffectiveZoneLevel value
     * @param string $effectiveZoneLevel
     * @return \Onesource\StructType\TaxDetail
     */
    public function setEffectiveZoneLevel($effectiveZoneLevel = null)
    {
        // validation for constraint: string
        if (!is_null($effectiveZoneLevel) && !is_string($effectiveZoneLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($effectiveZoneLevel)), __LINE__);
        }
        $this->EffectiveZoneLevel = $effectiveZoneLevel;
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
     * @return \Onesource\StructType\TaxDetail
     */
    public function setTaxableBasis($taxableBasis = null)
    {
        $this->TaxableBasis = $taxableBasis;
        return $this;
    }
    /**
     * Get TaxableCountry value
     * @return string|null
     */
    public function getTaxableCountry()
    {
        return $this->TaxableCountry;
    }
    /**
     * Set TaxableCountry value
     * @param string $taxableCountry
     * @return \Onesource\StructType\TaxDetail
     */
    public function setTaxableCountry($taxableCountry = null)
    {
        // validation for constraint: string
        if (!is_null($taxableCountry) && !is_string($taxableCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($taxableCountry)), __LINE__);
        }
        $this->TaxableCountry = $taxableCountry;
        return $this;
    }
    /**
     * Get TaxableRegion value
     * @return string|null
     */
    public function getTaxableRegion()
    {
        return $this->TaxableRegion;
    }
    /**
     * Set TaxableRegion value
     * @param string $taxableRegion
     * @return \Onesource\StructType\TaxDetail
     */
    public function setTaxableRegion($taxableRegion = null)
    {
        // validation for constraint: string
        if (!is_null($taxableRegion) && !is_string($taxableRegion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($taxableRegion)), __LINE__);
        }
        $this->TaxableRegion = $taxableRegion;
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
     * @return \Onesource\StructType\TaxDetail
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
     * @return \Onesource\StructType\TaxDetail
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
     * @return \Onesource\StructType\TaxDetail
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
     * @return \Onesource\StructType\TaxDetail
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
     * @return \Onesource\StructType\TaxDetail
     */
    public function setExemptAmount($exemptAmount = null)
    {
        $this->ExemptAmount = $exemptAmount;
        return $this;
    }
    /**
     * Get Registrations value
     * @return \Onesource\StructType\Registrations|null
     */
    public function getRegistrations()
    {
        return $this->Registrations;
    }
    /**
     * Set Registrations value
     * @param \Onesource\StructType\Registrations $registrations
     * @return \Onesource\StructType\TaxDetail
     */
    public function setRegistrations(\Onesource\StructType\Registrations $registrations = null)
    {
        $this->Registrations = $registrations;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Onesource\StructType\TaxDetail
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
