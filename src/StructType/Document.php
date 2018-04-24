<?php

namespace Onesource\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Document StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Document extends AbstractStructBase
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
     * The Attributes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Onesource\StructType\Attributes
     */
    public $Attributes;
    /**
     * The Dates
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Onesource\StructType\Dates
     */
    public $Dates;
    /**
     * The Lines
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Onesource\StructType\LineCollection
     */
    public $Lines;
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
     * The VendorTax
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $VendorTax;
    /**
     * Constructor method for Document
     * @uses Document::setDocumentNumber()
     * @uses Document::setAttributes()
     * @uses Document::setDates()
     * @uses Document::setLines()
     * @uses Document::setAddresses()
     * @uses Document::setVendorTax()
     * @param string $documentNumber
     * @param \Onesource\StructType\Attributes $attributes
     * @param \Onesource\StructType\Dates $dates
     * @param \Onesource\StructType\LineCollection $lines
     * @param \Onesource\StructType\AddressCollection $addresses
     * @param float $vendorTax
     */
    public function __construct($documentNumber = null, \Onesource\StructType\Attributes $attributes = null, \Onesource\StructType\Dates $dates = null, \Onesource\StructType\LineCollection $lines = null, \Onesource\StructType\AddressCollection $addresses = null, $vendorTax = null)
    {
        $this
            ->setDocumentNumber($documentNumber)
            ->setAttributes($attributes)
            ->setDates($dates)
            ->setLines($lines)
            ->setAddresses($addresses)
            ->setVendorTax($vendorTax);
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
     * @return \Onesource\StructType\Document
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
     * Get Attributes value
     * @return \Onesource\StructType\Attributes
     */
    public function getAttributes()
    {
        return $this->Attributes;
    }
    /**
     * Set Attributes value
     * @param \Onesource\StructType\Attributes $attributes
     * @return \Onesource\StructType\Document
     */
    public function setAttributes(\Onesource\StructType\Attributes $attributes = null)
    {
        $this->Attributes = $attributes;
        return $this;
    }
    /**
     * Get Dates value
     * @return \Onesource\StructType\Dates
     */
    public function getDates()
    {
        return $this->Dates;
    }
    /**
     * Set Dates value
     * @param \Onesource\StructType\Dates $dates
     * @return \Onesource\StructType\Document
     */
    public function setDates(\Onesource\StructType\Dates $dates = null)
    {
        $this->Dates = $dates;
        return $this;
    }
    /**
     * Get Lines value
     * @return \Onesource\StructType\LineCollection
     */
    public function getLines()
    {
        return $this->Lines;
    }
    /**
     * Set Lines value
     * @param \Onesource\StructType\LineCollection $lines
     * @return \Onesource\StructType\Document
     */
    public function setLines(\Onesource\StructType\LineCollection $lines = null)
    {
        $this->Lines = $lines;
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
     * @return \Onesource\StructType\Document
     */
    public function setAddresses(\Onesource\StructType\AddressCollection $addresses = null)
    {
        $this->Addresses = $addresses;
        return $this;
    }
    /**
     * Get VendorTax value
     * @return float|null
     */
    public function getVendorTax()
    {
        return $this->VendorTax;
    }
    /**
     * Set VendorTax value
     * @param float $vendorTax
     * @return \Onesource\StructType\Document
     */
    public function setVendorTax($vendorTax = null)
    {
        $this->VendorTax = $vendorTax;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Onesource\StructType\Document
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
