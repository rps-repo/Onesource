<?php

namespace Onesource\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReferenceDocument StructType
 * @subpackage Structs
 */
class ReferenceDocument extends AbstractStructBase
{
    /**
     * The OriginalDocumentDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $OriginalDocumentDate;
    /**
     * The OriginalDocumentId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - maxLength: 100
     * - minLength: 1
     * @var string
     */
    public $OriginalDocumentId;
    /**
     * The OriginalDocumentItem
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - maxLength: 100
     * - minLength: 1
     * @var string
     */
    public $OriginalDocumentItem;
    /**
     * The OriginalDocumentType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - maxLength: 50
     * - minLength: 1
     * @var string
     */
    public $OriginalDocumentType;
    /**
     * Constructor method for ReferenceDocument
     * @uses ReferenceDocument::setOriginalDocumentDate()
     * @uses ReferenceDocument::setOriginalDocumentId()
     * @uses ReferenceDocument::setOriginalDocumentItem()
     * @uses ReferenceDocument::setOriginalDocumentType()
     * @param string $originalDocumentDate
     * @param string $originalDocumentId
     * @param string $originalDocumentItem
     * @param string $originalDocumentType
     */
    public function __construct($originalDocumentDate = null, $originalDocumentId = null, $originalDocumentItem = null, $originalDocumentType = null)
    {
        $this
            ->setOriginalDocumentDate($originalDocumentDate)
            ->setOriginalDocumentId($originalDocumentId)
            ->setOriginalDocumentItem($originalDocumentItem)
            ->setOriginalDocumentType($originalDocumentType);
    }
    /**
     * Get OriginalDocumentDate value
     * @return string
     */
    public function getOriginalDocumentDate()
    {
        return $this->OriginalDocumentDate;
    }
    /**
     * Set OriginalDocumentDate value
     * @param string $originalDocumentDate
     * @return \Onesource\StructType\ReferenceDocument
     */
    public function setOriginalDocumentDate($originalDocumentDate = null)
    {
        // validation for constraint: string
        if (!is_null($originalDocumentDate) && !is_string($originalDocumentDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originalDocumentDate)), __LINE__);
        }
        $this->OriginalDocumentDate = $originalDocumentDate;
        return $this;
    }
    /**
     * Get OriginalDocumentId value
     * @return string|null
     */
    public function getOriginalDocumentId()
    {
        return $this->OriginalDocumentId;
    }
    /**
     * Set OriginalDocumentId value
     * @param string $originalDocumentId
     * @return \Onesource\StructType\ReferenceDocument
     */
    public function setOriginalDocumentId($originalDocumentId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($originalDocumentId) && strlen($originalDocumentId) > 100) || (is_array($originalDocumentId) && count($originalDocumentId) > 100)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 100 element(s) or a scalar of 100 character(s) at most, "%d" length given', is_scalar($originalDocumentId) ? strlen($originalDocumentId) : count($originalDocumentId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($originalDocumentId) && strlen($originalDocumentId) < 1) || (is_array($originalDocumentId) && count($originalDocumentId) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($originalDocumentId) && !is_string($originalDocumentId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originalDocumentId)), __LINE__);
        }
        $this->OriginalDocumentId = $originalDocumentId;
        return $this;
    }
    /**
     * Get OriginalDocumentItem value
     * @return string|null
     */
    public function getOriginalDocumentItem()
    {
        return $this->OriginalDocumentItem;
    }
    /**
     * Set OriginalDocumentItem value
     * @param string $originalDocumentItem
     * @return \Onesource\StructType\ReferenceDocument
     */
    public function setOriginalDocumentItem($originalDocumentItem = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($originalDocumentItem) && strlen($originalDocumentItem) > 100) || (is_array($originalDocumentItem) && count($originalDocumentItem) > 100)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 100 element(s) or a scalar of 100 character(s) at most, "%d" length given', is_scalar($originalDocumentItem) ? strlen($originalDocumentItem) : count($originalDocumentItem)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($originalDocumentItem) && strlen($originalDocumentItem) < 1) || (is_array($originalDocumentItem) && count($originalDocumentItem) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($originalDocumentItem) && !is_string($originalDocumentItem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originalDocumentItem)), __LINE__);
        }
        $this->OriginalDocumentItem = $originalDocumentItem;
        return $this;
    }
    /**
     * Get OriginalDocumentType value
     * @return string|null
     */
    public function getOriginalDocumentType()
    {
        return $this->OriginalDocumentType;
    }
    /**
     * Set OriginalDocumentType value
     * @param string $originalDocumentType
     * @return \Onesource\StructType\ReferenceDocument
     */
    public function setOriginalDocumentType($originalDocumentType = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($originalDocumentType) && strlen($originalDocumentType) > 50) || (is_array($originalDocumentType) && count($originalDocumentType) > 50)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 50 element(s) or a scalar of 50 character(s) at most, "%d" length given', is_scalar($originalDocumentType) ? strlen($originalDocumentType) : count($originalDocumentType)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($originalDocumentType) && strlen($originalDocumentType) < 1) || (is_array($originalDocumentType) && count($originalDocumentType) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($originalDocumentType) && !is_string($originalDocumentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originalDocumentType)), __LINE__);
        }
        $this->OriginalDocumentType = $originalDocumentType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Onesource\StructType\ReferenceDocument
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
