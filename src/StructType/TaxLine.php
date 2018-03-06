<?php

namespace Onesource\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxLine StructType
 * @subpackage Structs
 */
class TaxLine extends AbstractStructBase
{
    /**
     * The TaxSummary
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Onesource\StructType\TaxSummary
     */
    public $TaxSummary;
    /**
     * The LineNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: LineNumber
     * @var int
     */
    public $LineNumber;
    /**
     * The RelatedLineNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: RelatedLineNumber
     * @var int
     */
    public $RelatedLineNumber;
    /**
     * The AccrualMethod
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AccrualMethod;
    /**
     * The ChargeDetailCollection
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Onesource\StructType\ChargeDetailCollection
     */
    public $ChargeDetailCollection;
    /**
     * The ZoneTaxSummaries
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Onesource\StructType\ZoneTaxCollection
     */
    public $ZoneTaxSummaries;
    /**
     * The TaxDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Onesource\StructType\TaxDetailCollection
     */
    public $TaxDetails;
    /**
     * The Id
     * @var int
     */
    public $Id;
    /**
     * Constructor method for TaxLine
     * @uses TaxLine::setTaxSummary()
     * @uses TaxLine::setLineNumber()
     * @uses TaxLine::setRelatedLineNumber()
     * @uses TaxLine::setAccrualMethod()
     * @uses TaxLine::setChargeDetailCollection()
     * @uses TaxLine::setZoneTaxSummaries()
     * @uses TaxLine::setTaxDetails()
     * @uses TaxLine::setId()
     * @param \Onesource\StructType\TaxSummary $taxSummary
     * @param int $lineNumber
     * @param int $relatedLineNumber
     * @param string $accrualMethod
     * @param \Onesource\StructType\ChargeDetailCollection $chargeDetailCollection
     * @param \Onesource\StructType\ZoneTaxCollection $zoneTaxSummaries
     * @param \Onesource\StructType\TaxDetailCollection $taxDetails
     * @param int $id
     */
    public function __construct(\Onesource\StructType\TaxSummary $taxSummary = null, $lineNumber = null, $relatedLineNumber = null, $accrualMethod = null, \Onesource\StructType\ChargeDetailCollection $chargeDetailCollection = null, \Onesource\StructType\ZoneTaxCollection $zoneTaxSummaries = null, \Onesource\StructType\TaxDetailCollection $taxDetails = null, $id = null)
    {
        $this
            ->setTaxSummary($taxSummary)
            ->setLineNumber($lineNumber)
            ->setRelatedLineNumber($relatedLineNumber)
            ->setAccrualMethod($accrualMethod)
            ->setChargeDetailCollection($chargeDetailCollection)
            ->setZoneTaxSummaries($zoneTaxSummaries)
            ->setTaxDetails($taxDetails)
            ->setId($id);
    }
    /**
     * Get TaxSummary value
     * @return \Onesource\StructType\TaxSummary
     */
    public function getTaxSummary()
    {
        return $this->TaxSummary;
    }
    /**
     * Set TaxSummary value
     * @param \Onesource\StructType\TaxSummary $taxSummary
     * @return \Onesource\StructType\TaxLine
     */
    public function setTaxSummary(\Onesource\StructType\TaxSummary $taxSummary = null)
    {
        $this->TaxSummary = $taxSummary;
        return $this;
    }
    /**
     * Get LineNumber value
     * @return int|null
     */
    public function getLineNumber()
    {
        return $this->LineNumber;
    }
    /**
     * Set LineNumber value
     * @param int $lineNumber
     * @return \Onesource\StructType\TaxLine
     */
    public function setLineNumber($lineNumber = null)
    {
        // validation for constraint: int
        if (!is_null($lineNumber) && !is_numeric($lineNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($lineNumber)), __LINE__);
        }
        $this->LineNumber = $lineNumber;
        return $this;
    }
    /**
     * Get RelatedLineNumber value
     * @return int|null
     */
    public function getRelatedLineNumber()
    {
        return $this->RelatedLineNumber;
    }
    /**
     * Set RelatedLineNumber value
     * @param int $relatedLineNumber
     * @return \Onesource\StructType\TaxLine
     */
    public function setRelatedLineNumber($relatedLineNumber = null)
    {
        // validation for constraint: int
        if (!is_null($relatedLineNumber) && !is_numeric($relatedLineNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($relatedLineNumber)), __LINE__);
        }
        $this->RelatedLineNumber = $relatedLineNumber;
        return $this;
    }
    /**
     * Get AccrualMethod value
     * @return string|null
     */
    public function getAccrualMethod()
    {
        return $this->AccrualMethod;
    }
    /**
     * Set AccrualMethod value
     * @uses \Onesource\EnumType\AccrualMethod::valueIsValid()
     * @uses \Onesource\EnumType\AccrualMethod::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $accrualMethod
     * @return \Onesource\StructType\TaxLine
     */
    public function setAccrualMethod($accrualMethod = null)
    {
        // validation for constraint: enumeration
        if (!\Onesource\EnumType\AccrualMethod::valueIsValid($accrualMethod)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $accrualMethod, implode(', ', \Onesource\EnumType\AccrualMethod::getValidValues())), __LINE__);
        }
        $this->AccrualMethod = $accrualMethod;
        return $this;
    }
    /**
     * Get ChargeDetailCollection value
     * @return \Onesource\StructType\ChargeDetailCollection|null
     */
    public function getChargeDetailCollection()
    {
        return $this->ChargeDetailCollection;
    }
    /**
     * Set ChargeDetailCollection value
     * @param \Onesource\StructType\ChargeDetailCollection $chargeDetailCollection
     * @return \Onesource\StructType\TaxLine
     */
    public function setChargeDetailCollection(\Onesource\StructType\ChargeDetailCollection $chargeDetailCollection = null)
    {
        $this->ChargeDetailCollection = $chargeDetailCollection;
        return $this;
    }
    /**
     * Get ZoneTaxSummaries value
     * @return \Onesource\StructType\ZoneTaxCollection|null
     */
    public function getZoneTaxSummaries()
    {
        return $this->ZoneTaxSummaries;
    }
    /**
     * Set ZoneTaxSummaries value
     * @param \Onesource\StructType\ZoneTaxCollection $zoneTaxSummaries
     * @return \Onesource\StructType\TaxLine
     */
    public function setZoneTaxSummaries(\Onesource\StructType\ZoneTaxCollection $zoneTaxSummaries = null)
    {
        $this->ZoneTaxSummaries = $zoneTaxSummaries;
        return $this;
    }
    /**
     * Get TaxDetails value
     * @return \Onesource\StructType\TaxDetailCollection|null
     */
    public function getTaxDetails()
    {
        return $this->TaxDetails;
    }
    /**
     * Set TaxDetails value
     * @param \Onesource\StructType\TaxDetailCollection $taxDetails
     * @return \Onesource\StructType\TaxLine
     */
    public function setTaxDetails(\Onesource\StructType\TaxDetailCollection $taxDetails = null)
    {
        $this->TaxDetails = $taxDetails;
        return $this;
    }
    /**
     * Get Id value
     * @return int|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param int $id
     * @return \Onesource\StructType\TaxLine
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !is_numeric($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Onesource\StructType\TaxLine
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
