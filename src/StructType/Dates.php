<?php

namespace Onesource\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Dates StructType
 * @subpackage Structs
 */
class Dates extends AbstractStructBase
{
    /**
     * The DocumentDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $DocumentDate;
    /**
     * The FiscalDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $FiscalDate;
    /**
     * Constructor method for Dates
     * @uses Dates::setDocumentDate()
     * @uses Dates::setFiscalDate()
     * @param string $documentDate
     * @param string $fiscalDate
     */
    public function __construct($documentDate = null, $fiscalDate = null)
    {
        $this
            ->setDocumentDate($documentDate)
            ->setFiscalDate($fiscalDate);
    }
    /**
     * Get DocumentDate value
     * @return string
     */
    public function getDocumentDate()
    {
        return $this->DocumentDate;
    }
    /**
     * Set DocumentDate value
     * @param string $documentDate
     * @return \Onesource\StructType\Dates
     */
    public function setDocumentDate($documentDate = null)
    {
        // validation for constraint: string
        if (!is_null($documentDate) && !is_string($documentDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($documentDate)), __LINE__);
        }
        $this->DocumentDate = $documentDate;
        return $this;
    }
    /**
     * Get FiscalDate value
     * @return string
     */
    public function getFiscalDate()
    {
        return $this->FiscalDate;
    }
    /**
     * Set FiscalDate value
     * @param string $fiscalDate
     * @return \Onesource\StructType\Dates
     */
    public function setFiscalDate($fiscalDate = null)
    {
        // validation for constraint: string
        if (!is_null($fiscalDate) && !is_string($fiscalDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fiscalDate)), __LINE__);
        }
        $this->FiscalDate = $fiscalDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Onesource\StructType\Dates
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
