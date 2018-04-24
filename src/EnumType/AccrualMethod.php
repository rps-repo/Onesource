<?php

namespace Onesource\EnumType;

/**
 * This class stands for AccrualMethod EnumType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AccrualMethod
{
    /**
     * Constant for value 'AccrueSabrixAmount'
     * @return string 'AccrueSabrixAmount'
     */
    const VALUE_ACCRUE_SABRIX_AMOUNT = 'AccrueSabrixAmount';
    /**
     * Constant for value 'ReportOnly'
     * @return string 'ReportOnly'
     */
    const VALUE_REPORT_ONLY = 'ReportOnly';
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
     * @uses self::VALUE_ACCRUE_SABRIX_AMOUNT
     * @uses self::VALUE_REPORT_ONLY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ACCRUE_SABRIX_AMOUNT,
            self::VALUE_REPORT_ONLY,
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
