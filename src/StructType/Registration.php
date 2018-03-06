<?php

namespace Onesource\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Registration StructType
 * @subpackage Structs
 */
class Registration extends AbstractStructBase
{
    /**
     * The Country
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - maxLength: 50
     * - minLength: 1
     * @var string
     */
    public $Country;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Type;
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
     * Constructor method for Registration
     * @uses Registration::setCountry()
     * @uses Registration::setType()
     * @uses Registration::setValue()
     * @param string $country
     * @param string $type
     * @param string $value
     */
    public function __construct($country = null, $type = null, $value = null)
    {
        $this
            ->setCountry($country)
            ->setType($type)
            ->setValue($value);
    }
    /**
     * Get Country value
     * @return string
     */
    public function getCountry()
    {
        return $this->Country;
    }
    /**
     * Set Country value
     * @param string $country
     * @return \Onesource\StructType\Registration
     */
    public function setCountry($country = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($country) && strlen($country) > 50) || (is_array($country) && count($country) > 50)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 50 element(s) or a scalar of 50 character(s) at most, "%d" length given', is_scalar($country) ? strlen($country) : count($country)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($country) && strlen($country) < 1) || (is_array($country) && count($country) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->Country = $country;
        return $this;
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Onesource\EnumType\RegistrationType::valueIsValid()
     * @uses \Onesource\EnumType\RegistrationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Onesource\StructType\Registration
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Onesource\EnumType\RegistrationType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Onesource\EnumType\RegistrationType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
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
     * @return \Onesource\StructType\Registration
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
     * @return \Onesource\StructType\Registration
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
