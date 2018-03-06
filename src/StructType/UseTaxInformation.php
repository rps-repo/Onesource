<?php

namespace Onesource\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UseTaxInformation StructType
 * @subpackage Structs
 */
class UseTaxInformation extends AbstractStructBase
{
    /**
     * The InToleranceFlag
     * @var bool
     */
    public $InToleranceFlag;
    /**
     * The TolerancePercentage
     * @var float
     */
    public $TolerancePercentage;
    /**
     * The ToleranceAbsolute
     * @var float
     */
    public $ToleranceAbsolute;
    /**
     * Constructor method for UseTaxInformation
     * @uses UseTaxInformation::setInToleranceFlag()
     * @uses UseTaxInformation::setTolerancePercentage()
     * @uses UseTaxInformation::setToleranceAbsolute()
     * @param bool $inToleranceFlag
     * @param float $tolerancePercentage
     * @param float $toleranceAbsolute
     */
    public function __construct($inToleranceFlag = null, $tolerancePercentage = null, $toleranceAbsolute = null)
    {
        $this
            ->setInToleranceFlag($inToleranceFlag)
            ->setTolerancePercentage($tolerancePercentage)
            ->setToleranceAbsolute($toleranceAbsolute);
    }
    /**
     * Get InToleranceFlag value
     * @return bool|null
     */
    public function getInToleranceFlag()
    {
        return $this->InToleranceFlag;
    }
    /**
     * Set InToleranceFlag value
     * @param bool $inToleranceFlag
     * @return \Onesource\StructType\UseTaxInformation
     */
    public function setInToleranceFlag($inToleranceFlag = null)
    {
        // validation for constraint: boolean
        if (!is_null($inToleranceFlag) && !is_bool($inToleranceFlag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($inToleranceFlag)), __LINE__);
        }
        $this->InToleranceFlag = $inToleranceFlag;
        return $this;
    }
    /**
     * Get TolerancePercentage value
     * @return float|null
     */
    public function getTolerancePercentage()
    {
        return $this->TolerancePercentage;
    }
    /**
     * Set TolerancePercentage value
     * @param float $tolerancePercentage
     * @return \Onesource\StructType\UseTaxInformation
     */
    public function setTolerancePercentage($tolerancePercentage = null)
    {
        $this->TolerancePercentage = $tolerancePercentage;
        return $this;
    }
    /**
     * Get ToleranceAbsolute value
     * @return float|null
     */
    public function getToleranceAbsolute()
    {
        return $this->ToleranceAbsolute;
    }
    /**
     * Set ToleranceAbsolute value
     * @param float $toleranceAbsolute
     * @return \Onesource\StructType\UseTaxInformation
     */
    public function setToleranceAbsolute($toleranceAbsolute = null)
    {
        $this->ToleranceAbsolute = $toleranceAbsolute;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Onesource\StructType\UseTaxInformation
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
