<?php

namespace Onesource\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserAttributes StructType
 * @subpackage Structs
 */
class UserAttributes extends AbstractStructBase
{
    /**
     * The Key
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - maxInclusive: 5
     * - minInclusive: 1
     * @var int
     */
    public $Key;
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - maxLength: 200
     * - minLength: 1
     * @var string
     */
    public $Value;
    /**
     * Constructor method for UserAttributes
     * @uses UserAttributes::setKey()
     * @uses UserAttributes::setValue()
     * @param int $key
     * @param string $value
     */
    public function __construct($key = null, $value = null)
    {
        $this
            ->setKey($key)
            ->setValue($value);
    }
    /**
     * Get Key value
     * @return int
     */
    public function getKey()
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param int $key
     * @return \Onesource\StructType\UserAttributes
     */
    public function setKey($key = null)
    {
        // validation for constraint: maxInclusive
        if ($key > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 5, "%s" given', $key), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($key < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 1, "%s" given', $key), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($key) && !is_numeric($key)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($key)), __LINE__);
        }
        $this->Key = $key;
        return $this;
    }
    /**
     * Get Value value
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \Onesource\StructType\UserAttributes
     */
    public function setValue($value = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($value) && strlen($value) > 200) || (is_array($value) && count($value) > 200)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 200 element(s) or a scalar of 200 character(s) at most, "%d" length given', is_scalar($value) ? strlen($value) : count($value)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($value) && strlen($value) < 1) || (is_array($value) && count($value) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($value)), __LINE__);
        }
        $this->Value = $value;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Onesource\StructType\UserAttributes
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
