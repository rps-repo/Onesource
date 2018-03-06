<?php

namespace Onesource\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Status StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type reflects the status of a tax calculation request. It is attached to the response at the document and request levels.
 * @subpackage Structs
 */
class Status extends AbstractStructBase
{
    /**
     * The Success
     * @var string
     */
    public $Success;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Code;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The ErrorLocationPath
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ErrorLocationPath;
    /**
     * Constructor method for Status
     * @uses Status::setSuccess()
     * @uses Status::setCode()
     * @uses Status::setDescription()
     * @uses Status::setErrorLocationPath()
     * @param string $success
     * @param string $code
     * @param string $description
     * @param string $errorLocationPath
     */
    public function __construct($success = null, $code = null, $description = null, $errorLocationPath = null)
    {
        $this
            ->setSuccess($success)
            ->setCode($code)
            ->setDescription($description)
            ->setErrorLocationPath($errorLocationPath);
    }
    /**
     * Get Success value
     * @return string|null
     */
    public function getSuccess()
    {
        return $this->Success;
    }
    /**
     * Set Success value
     * @uses \Onesource\EnumType\SuccessType::valueIsValid()
     * @uses \Onesource\EnumType\SuccessType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $success
     * @return \Onesource\StructType\Status
     */
    public function setSuccess($success = null)
    {
        // validation for constraint: enumeration
        if (!\Onesource\EnumType\SuccessType::valueIsValid($success)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $success, implode(', ', \Onesource\EnumType\SuccessType::getValidValues())), __LINE__);
        }
        $this->Success = $success;
        return $this;
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Onesource\StructType\Status
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Onesource\StructType\Status
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get ErrorLocationPath value
     * @return string|null
     */
    public function getErrorLocationPath()
    {
        return $this->ErrorLocationPath;
    }
    /**
     * Set ErrorLocationPath value
     * @param string $errorLocationPath
     * @return \Onesource\StructType\Status
     */
    public function setErrorLocationPath($errorLocationPath = null)
    {
        // validation for constraint: string
        if (!is_null($errorLocationPath) && !is_string($errorLocationPath)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($errorLocationPath)), __LINE__);
        }
        $this->ErrorLocationPath = $errorLocationPath;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Onesource\StructType\Status
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
