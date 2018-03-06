<?php

namespace Onesource\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Line StructType
 * @subpackage Structs
 */
class Line extends AbstractStructBase
{
    /**
     * The LineNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: LineNumber
     * @var int
     */
    public $LineNumber;
    /**
     * The Amounts
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Onesource\StructType\Amounts
     */
    public $Amounts;
    /**
     * The Quantity
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Onesource\StructType\Quantity
     */
    public $Quantity;
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
     * The Addresses
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: Addresses
     * @var \Onesource\StructType\AddressCollection
     */
    public $Addresses;
    /**
     * The ChargeCollection
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Onesource\StructType\ChargeCollection
     */
    public $ChargeCollection;
    /**
     * The Attributes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Onesource\StructType\Attributes
     */
    public $Attributes;
    /**
     * The TaxabilityInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: TaxabilityInfo
     * @var \Onesource\StructType\TaxabilityInfo
     */
    public $TaxabilityInfo;
    /**
     * The Registrations
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Onesource\StructType\Registrations
     */
    public $Registrations;
    /**
     * The Id
     * @var int
     */
    public $Id;
    /**
     * Constructor method for Line
     * @uses Line::setLineNumber()
     * @uses Line::setAmounts()
     * @uses Line::setQuantity()
     * @uses Line::setRelatedLineNumber()
     * @uses Line::setAddresses()
     * @uses Line::setChargeCollection()
     * @uses Line::setAttributes()
     * @uses Line::setTaxabilityInfo()
     * @uses Line::setRegistrations()
     * @uses Line::setId()
     * @param int $lineNumber
     * @param \Onesource\StructType\Amounts $amounts
     * @param \Onesource\StructType\Quantity $quantity
     * @param int $relatedLineNumber
     * @param \Onesource\StructType\AddressCollection $addresses
     * @param \Onesource\StructType\ChargeCollection $chargeCollection
     * @param \Onesource\StructType\Attributes $attributes
     * @param \Onesource\StructType\TaxabilityInfo $taxabilityInfo
     * @param \Onesource\StructType\Registrations $registrations
     * @param int $id
     */
    public function __construct($lineNumber = null, \Onesource\StructType\Amounts $amounts = null, \Onesource\StructType\Quantity $quantity = null, $relatedLineNumber = null, \Onesource\StructType\AddressCollection $addresses = null, \Onesource\StructType\ChargeCollection $chargeCollection = null, \Onesource\StructType\Attributes $attributes = null, \Onesource\StructType\TaxabilityInfo $taxabilityInfo = null, \Onesource\StructType\Registrations $registrations = null, $id = null)
    {
        $this
            ->setLineNumber($lineNumber)
            ->setAmounts($amounts)
            ->setQuantity($quantity)
            ->setRelatedLineNumber($relatedLineNumber)
            ->setAddresses($addresses)
            ->setChargeCollection($chargeCollection)
            ->setAttributes($attributes)
            ->setTaxabilityInfo($taxabilityInfo)
            ->setRegistrations($registrations)
            ->setId($id);
    }
    /**
     * Get LineNumber value
     * @return int
     */
    public function getLineNumber()
    {
        return $this->LineNumber;
    }
    /**
     * Set LineNumber value
     * @param int $lineNumber
     * @return \Onesource\StructType\Line
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
     * Get Amounts value
     * @return \Onesource\StructType\Amounts
     */
    public function getAmounts()
    {
        return $this->Amounts;
    }
    /**
     * Set Amounts value
     * @param \Onesource\StructType\Amounts $amounts
     * @return \Onesource\StructType\Line
     */
    public function setAmounts(\Onesource\StructType\Amounts $amounts = null)
    {
        $this->Amounts = $amounts;
        return $this;
    }
    /**
     * Get Quantity value
     * @return \Onesource\StructType\Quantity
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param \Onesource\StructType\Quantity $quantity
     * @return \Onesource\StructType\Line
     */
    public function setQuantity(\Onesource\StructType\Quantity $quantity = null)
    {
        $this->Quantity = $quantity;
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
     * @return \Onesource\StructType\Line
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
     * Get Addresses value
     * @return \Onesource\StructType\AddressCollection|null
     */
    public function getAddresses()
    {
        return $this->Addresses;
    }
    /**
     * Set Addresses value
     * @param \Onesource\StructType\AddressCollection $addresses
     * @return \Onesource\StructType\Line
     */
    public function setAddresses(\Onesource\StructType\AddressCollection $addresses = null)
    {
        $this->Addresses = $addresses;
        return $this;
    }
    /**
     * Get ChargeCollection value
     * @return \Onesource\StructType\ChargeCollection|null
     */
    public function getChargeCollection()
    {
        return $this->ChargeCollection;
    }
    /**
     * Set ChargeCollection value
     * @param \Onesource\StructType\ChargeCollection $chargeCollection
     * @return \Onesource\StructType\Line
     */
    public function setChargeCollection(\Onesource\StructType\ChargeCollection $chargeCollection = null)
    {
        $this->ChargeCollection = $chargeCollection;
        return $this;
    }
    /**
     * Get Attributes value
     * @return \Onesource\StructType\Attributes|null
     */
    public function getAttributes()
    {
        return $this->Attributes;
    }
    /**
     * Set Attributes value
     * @param \Onesource\StructType\Attributes $attributes
     * @return \Onesource\StructType\Line
     */
    public function setAttributes(\Onesource\StructType\Attributes $attributes = null)
    {
        $this->Attributes = $attributes;
        return $this;
    }
    /**
     * Get TaxabilityInfo value
     * @return \Onesource\StructType\TaxabilityInfo|null
     */
    public function getTaxabilityInfo()
    {
        return $this->TaxabilityInfo;
    }
    /**
     * Set TaxabilityInfo value
     * @param \Onesource\StructType\TaxabilityInfo $taxabilityInfo
     * @return \Onesource\StructType\Line
     */
    public function setTaxabilityInfo(\Onesource\StructType\TaxabilityInfo $taxabilityInfo = null)
    {
        $this->TaxabilityInfo = $taxabilityInfo;
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
     * @return \Onesource\StructType\Line
     */
    public function setRegistrations(\Onesource\StructType\Registrations $registrations = null)
    {
        $this->Registrations = $registrations;
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
     * @return \Onesource\StructType\Line
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
     * @return \Onesource\StructType\Line
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
