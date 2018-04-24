<?php

namespace Onesource\EnumType;

/**
 * This class stands for PointOfTitleTransfer EnumType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PointOfTitleTransfer
{
    /**
     * Constant for value 'Destination'
     * @return string 'Destination'
     */
    const VALUE_DESTINATION = 'Destination';
    /**
     * Constant for value 'Origin'
     * @return string 'Origin'
     */
    const VALUE_ORIGIN = 'Origin';
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
     * @uses self::VALUE_DESTINATION
     * @uses self::VALUE_ORIGIN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DESTINATION,
            self::VALUE_ORIGIN,
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
