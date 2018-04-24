<?php

namespace Onesource\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Quantity StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Quantity extends AbstractStructBase
{
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $Amount;
    /**
     * The UOM
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - maxLength: 25
     * - minLength: 1
     * @var string
     */
    public $UOM;
    /**
     * Constructor method for Quantity
     * @uses Quantity::setAmount()
     * @uses Quantity::setUOM()
     * @param float $amount
     * @param string $uOM
     */
    public function __construct($amount = null, $uOM = null)
    {
        $this
            ->setAmount($amount)
            ->setUOM($uOM);
    }
    /**
     * Get Amount value
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param float $amount
     * @return \Onesource\StructType\Quantity
     */
    public function setAmount($amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get UOM value
     * @return string
     */
    public function getUOM()
    {
        return $this->UOM;
    }
    /**
     * Set UOM value
     * @param string $uOM
     * @return \Onesource\StructType\Quantity
     */
    public function setUOM($uOM = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($uOM) && strlen($uOM) > 25) || (is_array($uOM) && count($uOM) > 25)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 25 element(s) or a scalar of 25 character(s) at most, "%d" length given', is_scalar($uOM) ? strlen($uOM) : count($uOM)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($uOM) && strlen($uOM) < 1) || (is_array($uOM) && count($uOM) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($uOM) && !is_string($uOM)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uOM)), __LINE__);
        }
        $this->UOM = $uOM;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Onesource\StructType\Quantity
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
