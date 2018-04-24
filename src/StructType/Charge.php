<?php

namespace Onesource\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Charge StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Charge extends AbstractStructBase
{
    /**
     * The ChargeType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - maxLength: 25
     * - minLength: 1
     * @var string
     */
    public $ChargeType;
    /**
     * The ChargeAmount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $ChargeAmount;
    /**
     * The ChargeProductCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - maxLength: 4
     * - minLength: 1
     * @var string
     */
    public $ChargeProductCode;
    /**
     * Constructor method for Charge
     * @uses Charge::setChargeType()
     * @uses Charge::setChargeAmount()
     * @uses Charge::setChargeProductCode()
     * @param string $chargeType
     * @param float $chargeAmount
     * @param string $chargeProductCode
     */
    public function __construct($chargeType = null, $chargeAmount = null, $chargeProductCode = null)
    {
        $this
            ->setChargeType($chargeType)
            ->setChargeAmount($chargeAmount)
            ->setChargeProductCode($chargeProductCode);
    }
    /**
     * Get ChargeType value
     * @return string
     */
    public function getChargeType()
    {
        return $this->ChargeType;
    }
    /**
     * Set ChargeType value
     * @param string $chargeType
     * @return \Onesource\StructType\Charge
     */
    public function setChargeType($chargeType = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($chargeType) && strlen($chargeType) > 25) || (is_array($chargeType) && count($chargeType) > 25)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 25 element(s) or a scalar of 25 character(s) at most, "%d" length given', is_scalar($chargeType) ? strlen($chargeType) : count($chargeType)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($chargeType) && strlen($chargeType) < 1) || (is_array($chargeType) && count($chargeType) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($chargeType) && !is_string($chargeType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($chargeType)), __LINE__);
        }
        $this->ChargeType = $chargeType;
        return $this;
    }
    /**
     * Get ChargeAmount value
     * @return float
     */
    public function getChargeAmount()
    {
        return $this->ChargeAmount;
    }
    /**
     * Set ChargeAmount value
     * @param float $chargeAmount
     * @return \Onesource\StructType\Charge
     */
    public function setChargeAmount($chargeAmount = null)
    {
        $this->ChargeAmount = $chargeAmount;
        return $this;
    }
    /**
     * Get ChargeProductCode value
     * @return string
     */
    public function getChargeProductCode()
    {
        return $this->ChargeProductCode;
    }
    /**
     * Set ChargeProductCode value
     * @param string $chargeProductCode
     * @return \Onesource\StructType\Charge
     */
    public function setChargeProductCode($chargeProductCode = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($chargeProductCode) && strlen($chargeProductCode) > 4) || (is_array($chargeProductCode) && count($chargeProductCode) > 4)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 4 element(s) or a scalar of 4 character(s) at most, "%d" length given', is_scalar($chargeProductCode) ? strlen($chargeProductCode) : count($chargeProductCode)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($chargeProductCode) && strlen($chargeProductCode) < 1) || (is_array($chargeProductCode) && count($chargeProductCode) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($chargeProductCode) && !is_string($chargeProductCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($chargeProductCode)), __LINE__);
        }
        $this->ChargeProductCode = $chargeProductCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Onesource\StructType\Charge
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
