<?php

namespace Onesource\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxabilityInfo StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TaxabilityInfo extends AbstractStructBase
{
    /**
     * The GlAccount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - maxLength: 100
     * - minLength: 1
     * @var string
     */
    public $GlAccount;
    /**
     * The CostCenter
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - maxLength: 100
     * - minLength: 1
     * @var string
     */
    public $CostCenter;
    /**
     * Constructor method for TaxabilityInfo
     * @uses TaxabilityInfo::setGlAccount()
     * @uses TaxabilityInfo::setCostCenter()
     * @param string $glAccount
     * @param string $costCenter
     */
    public function __construct($glAccount = null, $costCenter = null)
    {
        $this
            ->setGlAccount($glAccount)
            ->setCostCenter($costCenter);
    }
    /**
     * Get GlAccount value
     * @return string|null
     */
    public function getGlAccount()
    {
        return $this->GlAccount;
    }
    /**
     * Set GlAccount value
     * @param string $glAccount
     * @return \Onesource\StructType\TaxabilityInfo
     */
    public function setGlAccount($glAccount = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($glAccount) && strlen($glAccount) > 100) || (is_array($glAccount) && count($glAccount) > 100)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 100 element(s) or a scalar of 100 character(s) at most, "%d" length given', is_scalar($glAccount) ? strlen($glAccount) : count($glAccount)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($glAccount) && strlen($glAccount) < 1) || (is_array($glAccount) && count($glAccount) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($glAccount) && !is_string($glAccount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($glAccount)), __LINE__);
        }
        $this->GlAccount = $glAccount;
        return $this;
    }
    /**
     * Get CostCenter value
     * @return string|null
     */
    public function getCostCenter()
    {
        return $this->CostCenter;
    }
    /**
     * Set CostCenter value
     * @param string $costCenter
     * @return \Onesource\StructType\TaxabilityInfo
     */
    public function setCostCenter($costCenter = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($costCenter) && strlen($costCenter) > 100) || (is_array($costCenter) && count($costCenter) > 100)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 100 element(s) or a scalar of 100 character(s) at most, "%d" length given', is_scalar($costCenter) ? strlen($costCenter) : count($costCenter)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($costCenter) && strlen($costCenter) < 1) || (is_array($costCenter) && count($costCenter) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($costCenter) && !is_string($costCenter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($costCenter)), __LINE__);
        }
        $this->CostCenter = $costCenter;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Onesource\StructType\TaxabilityInfo
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
