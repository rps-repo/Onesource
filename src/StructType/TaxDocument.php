<?php

namespace Onesource\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxDocument StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TaxDocument extends AbstractStructBase
{
    /**
     * The DocumentNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: DocumentNumber
     * - maxLength: 200
     * - minLength: 1
     * @var string
     */
    public $DocumentNumber;
    /**
     * The DocumentStatus
     * Meta informations extracted from the WSDL
     * - documentation: The status of the request that generated this document. See the documentation for the '<Status>/' element.
     * @var \Onesource\StructType\Status
     */
    public $DocumentStatus;
    /**
     * The UseTaxInformation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Onesource\StructType\UseTaxInformation
     */
    public $UseTaxInformation;
    /**
     * The TotalTaxAmount
     * @var float
     */
    public $TotalTaxAmount;
    /**
     * The TaxLines
     * @var \Onesource\StructType\TaxLineCollection
     */
    public $TaxLines;
    /**
     * Constructor method for TaxDocument
     * @uses TaxDocument::setDocumentNumber()
     * @uses TaxDocument::setDocumentStatus()
     * @uses TaxDocument::setUseTaxInformation()
     * @uses TaxDocument::setTotalTaxAmount()
     * @uses TaxDocument::setTaxLines()
     * @param string $documentNumber
     * @param \Onesource\StructType\Status $documentStatus
     * @param \Onesource\StructType\UseTaxInformation $useTaxInformation
     * @param float $totalTaxAmount
     * @param \Onesource\StructType\TaxLineCollection $taxLines
     */
    public function __construct($documentNumber = null, \Onesource\StructType\Status $documentStatus = null, \Onesource\StructType\UseTaxInformation $useTaxInformation = null, $totalTaxAmount = null, \Onesource\StructType\TaxLineCollection $taxLines = null)
    {
        $this
            ->setDocumentNumber($documentNumber)
            ->setDocumentStatus($documentStatus)
            ->setUseTaxInformation($useTaxInformation)
            ->setTotalTaxAmount($totalTaxAmount)
            ->setTaxLines($taxLines);
    }
    /**
     * Get DocumentNumber value
     * @return string
     */
    public function getDocumentNumber()
    {
        return $this->DocumentNumber;
    }
    /**
     * Set DocumentNumber value
     * @param string $documentNumber
     * @return \Onesource\StructType\TaxDocument
     */
    public function setDocumentNumber($documentNumber = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($documentNumber) && strlen($documentNumber) > 200) || (is_array($documentNumber) && count($documentNumber) > 200)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 200 element(s) or a scalar of 200 character(s) at most, "%d" length given', is_scalar($documentNumber) ? strlen($documentNumber) : count($documentNumber)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($documentNumber) && strlen($documentNumber) < 1) || (is_array($documentNumber) && count($documentNumber) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($documentNumber) && !is_string($documentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($documentNumber)), __LINE__);
        }
        $this->DocumentNumber = $documentNumber;
        return $this;
    }
    /**
     * Get DocumentStatus value
     * @return \Onesource\StructType\Status|null
     */
    public function getDocumentStatus()
    {
        return $this->DocumentStatus;
    }
    /**
     * Set DocumentStatus value
     * @param \Onesource\StructType\Status $documentStatus
     * @return \Onesource\StructType\TaxDocument
     */
    public function setDocumentStatus(\Onesource\StructType\Status $documentStatus = null)
    {
        $this->DocumentStatus = $documentStatus;
        return $this;
    }
    /**
     * Get UseTaxInformation value
     * @return \Onesource\StructType\UseTaxInformation|null
     */
    public function getUseTaxInformation()
    {
        return $this->UseTaxInformation;
    }
    /**
     * Set UseTaxInformation value
     * @param \Onesource\StructType\UseTaxInformation $useTaxInformation
     * @return \Onesource\StructType\TaxDocument
     */
    public function setUseTaxInformation(\Onesource\StructType\UseTaxInformation $useTaxInformation = null)
    {
        $this->UseTaxInformation = $useTaxInformation;
        return $this;
    }
    /**
     * Get TotalTaxAmount value
     * @return float|null
     */
    public function getTotalTaxAmount()
    {
        return $this->TotalTaxAmount;
    }
    /**
     * Set TotalTaxAmount value
     * @param float $totalTaxAmount
     * @return \Onesource\StructType\TaxDocument
     */
    public function setTotalTaxAmount($totalTaxAmount = null)
    {
        $this->TotalTaxAmount = $totalTaxAmount;
        return $this;
    }
    /**
     * Get TaxLines value
     * @return \Onesource\StructType\TaxLineCollection|null
     */
    public function getTaxLines()
    {
        return $this->TaxLines;
    }
    /**
     * Set TaxLines value
     * @param \Onesource\StructType\TaxLineCollection $taxLines
     * @return \Onesource\StructType\TaxDocument
     */
    public function setTaxLines(\Onesource\StructType\TaxLineCollection $taxLines = null)
    {
        $this->TaxLines = $taxLines;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Onesource\StructType\TaxDocument
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
