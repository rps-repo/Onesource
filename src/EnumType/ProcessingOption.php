<?php

namespace Onesource\EnumType;

/**
 * This class stands for ProcessingOption EnumType
 * @subpackage Enumerations
 */
class ProcessingOption
{
    /**
     * Constant for value 'ChargeNotIncludedInAmounts'
     * @return string 'ChargeNotIncludedInAmounts'
     */
    const VALUE_CHARGE_NOT_INCLUDED_IN_AMOUNTS = 'ChargeNotIncludedInAmounts';
    /**
     * Constant for value 'ChargeIncludedInAmounts'
     * @return string 'ChargeIncludedInAmounts'
     */
    const VALUE_CHARGE_INCLUDED_IN_AMOUNTS = 'ChargeIncludedInAmounts';
    /**
     * Constant for value 'ChargeAsSeparateAuthority'
     * @return string 'ChargeAsSeparateAuthority'
     */
    const VALUE_CHARGE_AS_SEPARATE_AUTHORITY = 'ChargeAsSeparateAuthority';
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
     * @uses self::VALUE_CHARGE_NOT_INCLUDED_IN_AMOUNTS
     * @uses self::VALUE_CHARGE_INCLUDED_IN_AMOUNTS
     * @uses self::VALUE_CHARGE_AS_SEPARATE_AUTHORITY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CHARGE_NOT_INCLUDED_IN_AMOUNTS,
            self::VALUE_CHARGE_INCLUDED_IN_AMOUNTS,
            self::VALUE_CHARGE_AS_SEPARATE_AUTHORITY,
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
