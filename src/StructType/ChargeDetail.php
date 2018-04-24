<?php

namespace Onesource\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChargeDetail StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ChargeDetail extends AbstractStructBase
{
    /**
     * The ChargeType
     * Meta informations extracted from the WSDL
     * - maxLength: 25
     * - minLength: 1
     * @var string
     */
    public $ChargeType;
    /**
     * The ChargeTaxAmount
     * @var float
     */
    public $ChargeTaxAmount;
    /**
     * The ChargeTaxRate
     * @var float
     */
    public $ChargeTaxRate;
    /**
     * Constructor method for ChargeDetail
     * @uses ChargeDetail::setChargeType()
     * @uses ChargeDetail::setChargeTaxAmount()
     * @uses ChargeDetail::setChargeTaxRate()
     * @param string $chargeType
     * @param float $chargeTaxAmount
     * @param float $chargeTaxRate
     */
    public function __construct($chargeType = null, $chargeTaxAmount = null, $chargeTaxRate = null)
    {
        $this
            ->setChargeType($chargeType)
            ->setChargeTaxAmount($chargeTaxAmount)
            ->setChargeTaxRate($chargeTaxRate);
    }
    /**
     * Get ChargeType value
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->ChargeType;
    }
    /**
     * Set ChargeType value
     * @param string $chargeType
     * @return \Onesource\StructType\ChargeDetail
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
     * Get ChargeTaxAmount value
     * @return float|null
     */
    public function getChargeTaxAmount()
    {
        return $this->ChargeTaxAmount;
    }
    /**
     * Set ChargeTaxAmount value
     * @param float $chargeTaxAmount
     * @return \Onesource\StructType\ChargeDetail
     */
    public function setChargeTaxAmount($chargeTaxAmount = null)
    {
        $this->ChargeTaxAmount = $chargeTaxAmount;
        return $this;
    }
    /**
     * Get ChargeTaxRate value
     * @return float|null
     */
    public function getChargeTaxRate()
    {
        return $this->ChargeTaxRate;
    }
    /**
     * Set ChargeTaxRate value
     * @param float $chargeTaxRate
     * @return \Onesource\StructType\ChargeDetail
     */
    public function setChargeTaxRate($chargeTaxRate = null)
    {
        $this->ChargeTaxRate = $chargeTaxRate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Onesource\StructType\ChargeDetail
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
