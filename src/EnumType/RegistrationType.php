<?php

namespace Onesource\EnumType;

/**
 * This class stands for RegistrationType EnumType
 * @subpackage Enumerations
 */
class RegistrationType
{
    /**
     * Constant for value 'Federal'
     * @return string 'Federal'
     */
    const VALUE_FEDERAL = 'Federal';
    /**
     * Constant for value 'Provincial'
     * @return string 'Provincial'
     */
    const VALUE_PROVINCIAL = 'Provincial';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_FEDERAL
     * @uses self::VALUE_PROVINCIAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FEDERAL,
            self::VALUE_PROVINCIAL,
        );
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
