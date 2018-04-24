<?php

namespace Onesource\EnumType;

/**
 * This class stands for AmountType EnumType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AmountType
{
    /**
     * Constant for value 'GrossAmountBased'
     * @return string 'GrossAmountBased'
     */
    const VALUE_GROSS_AMOUNT_BASED = 'GrossAmountBased';
    /**
     * Constant for value 'GrossPlusTaxBased'
     * @return string 'GrossPlusTaxBased'
     */
    const VALUE_GROSS_PLUS_TAX_BASED = 'GrossPlusTaxBased';
    /**
     * Constant for value 'TaxAmountBased'
     * @return string 'TaxAmountBased'
     */
    const VALUE_TAX_AMOUNT_BASED = 'TaxAmountBased';
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
     * @uses self::VALUE_GROSS_AMOUNT_BASED
     * @uses self::VALUE_GROSS_PLUS_TAX_BASED
     * @uses self::VALUE_TAX_AMOUNT_BASED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_GROSS_AMOUNT_BASED,
            self::VALUE_GROSS_PLUS_TAX_BASED,
            self::VALUE_TAX_AMOUNT_BASED,
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
