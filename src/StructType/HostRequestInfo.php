<?php

namespace Onesource\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HostRequestInfo StructType
 * @subpackage Structs
 */
class HostRequestInfo extends AbstractStructBase
{
    /**
     * The CallingClient
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - maxLength: 100
     * - minLength: 1
     * @var string
     */
    public $CallingClient;
    /**
     * The CallingSource
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - maxLength: 100
     * - minLength: 1
     * @var string
     */
    public $CallingSource;
    /**
     * The CallingSystemNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - maxLength: 100
     * - minLength: 1
     * @var string
     */
    public $CallingSystemNumber;
    /**
     * The CallingUser
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - maxLength: 100
     * - minLength: 1
     * @var string
     */
    public $CallingUser;
    /**
     * The DbVersion
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - maxLength: 100
     * - minLength: 1
     * @var string
     */
    public $DbVersion;
    /**
     * The ErpVersion
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - maxLength: 100
     * - minLength: 1
     * @var string
     */
    public $ErpVersion;
    /**
     * The HostRequestId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: HostRequestId
     * - maxLength: 100
     * - minLength: 1
     * @var string
     */
    public $HostRequestId;
    /**
     * The HostRequestLoggingId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: HostRequestLoggingId
     * - maxLength: 100
     * - minLength: 1
     * @var string
     */
    public $HostRequestLoggingId;
    /**
     * The HostSystemNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - maxLength: 100
     * - minLength: 1
     * @var string
     */
    public $HostSystemNumber;
    /**
     * The IntegrationVersion
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - maxLength: 100
     * - minLength: 1
     * @var string
     */
    public $IntegrationVersion;
    /**
     * The SdkVersion
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - maxLength: 100
     * - minLength: 1
     * @var string
     */
    public $SdkVersion;
    /**
     * Constructor method for HostRequestInfo
     * @uses HostRequestInfo::setCallingClient()
     * @uses HostRequestInfo::setCallingSource()
     * @uses HostRequestInfo::setCallingSystemNumber()
     * @uses HostRequestInfo::setCallingUser()
     * @uses HostRequestInfo::setDbVersion()
     * @uses HostRequestInfo::setErpVersion()
     * @uses HostRequestInfo::setHostRequestId()
     * @uses HostRequestInfo::setHostRequestLoggingId()
     * @uses HostRequestInfo::setHostSystemNumber()
     * @uses HostRequestInfo::setIntegrationVersion()
     * @uses HostRequestInfo::setSdkVersion()
     * @param string $callingClient
     * @param string $callingSource
     * @param string $callingSystemNumber
     * @param string $callingUser
     * @param string $dbVersion
     * @param string $erpVersion
     * @param string $hostRequestId
     * @param string $hostRequestLoggingId
     * @param string $hostSystemNumber
     * @param string $integrationVersion
     * @param string $sdkVersion
     */
    public function __construct($callingClient = null, $callingSource = null, $callingSystemNumber = null, $callingUser = null, $dbVersion = null, $erpVersion = null, $hostRequestId = null, $hostRequestLoggingId = null, $hostSystemNumber = null, $integrationVersion = null, $sdkVersion = null)
    {
        $this
            ->setCallingClient($callingClient)
            ->setCallingSource($callingSource)
            ->setCallingSystemNumber($callingSystemNumber)
            ->setCallingUser($callingUser)
            ->setDbVersion($dbVersion)
            ->setErpVersion($erpVersion)
            ->setHostRequestId($hostRequestId)
            ->setHostRequestLoggingId($hostRequestLoggingId)
            ->setHostSystemNumber($hostSystemNumber)
            ->setIntegrationVersion($integrationVersion)
            ->setSdkVersion($sdkVersion);
    }
    /**
     * Get CallingClient value
     * @return string
     */
    public function getCallingClient()
    {
        return $this->CallingClient;
    }
    /**
     * Set CallingClient value
     * @param string $callingClient
     * @return \Onesource\StructType\HostRequestInfo
     */
    public function setCallingClient($callingClient = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($callingClient) && strlen($callingClient) > 100) || (is_array($callingClient) && count($callingClient) > 100)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 100 element(s) or a scalar of 100 character(s) at most, "%d" length given', is_scalar($callingClient) ? strlen($callingClient) : count($callingClient)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($callingClient) && strlen($callingClient) < 1) || (is_array($callingClient) && count($callingClient) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($callingClient) && !is_string($callingClient)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($callingClient)), __LINE__);
        }
        $this->CallingClient = $callingClient;
        return $this;
    }
    /**
     * Get CallingSource value
     * @return string
     */
    public function getCallingSource()
    {
        return $this->CallingSource;
    }
    /**
     * Set CallingSource value
     * @param string $callingSource
     * @return \Onesource\StructType\HostRequestInfo
     */
    public function setCallingSource($callingSource = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($callingSource) && strlen($callingSource) > 100) || (is_array($callingSource) && count($callingSource) > 100)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 100 element(s) or a scalar of 100 character(s) at most, "%d" length given', is_scalar($callingSource) ? strlen($callingSource) : count($callingSource)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($callingSource) && strlen($callingSource) < 1) || (is_array($callingSource) && count($callingSource) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($callingSource) && !is_string($callingSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($callingSource)), __LINE__);
        }
        $this->CallingSource = $callingSource;
        return $this;
    }
    /**
     * Get CallingSystemNumber value
     * @return string
     */
    public function getCallingSystemNumber()
    {
        return $this->CallingSystemNumber;
    }
    /**
     * Set CallingSystemNumber value
     * @param string $callingSystemNumber
     * @return \Onesource\StructType\HostRequestInfo
     */
    public function setCallingSystemNumber($callingSystemNumber = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($callingSystemNumber) && strlen($callingSystemNumber) > 100) || (is_array($callingSystemNumber) && count($callingSystemNumber) > 100)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 100 element(s) or a scalar of 100 character(s) at most, "%d" length given', is_scalar($callingSystemNumber) ? strlen($callingSystemNumber) : count($callingSystemNumber)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($callingSystemNumber) && strlen($callingSystemNumber) < 1) || (is_array($callingSystemNumber) && count($callingSystemNumber) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($callingSystemNumber) && !is_string($callingSystemNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($callingSystemNumber)), __LINE__);
        }
        $this->CallingSystemNumber = $callingSystemNumber;
        return $this;
    }
    /**
     * Get CallingUser value
     * @return string
     */
    public function getCallingUser()
    {
        return $this->CallingUser;
    }
    /**
     * Set CallingUser value
     * @param string $callingUser
     * @return \Onesource\StructType\HostRequestInfo
     */
    public function setCallingUser($callingUser = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($callingUser) && strlen($callingUser) > 100) || (is_array($callingUser) && count($callingUser) > 100)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 100 element(s) or a scalar of 100 character(s) at most, "%d" length given', is_scalar($callingUser) ? strlen($callingUser) : count($callingUser)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($callingUser) && strlen($callingUser) < 1) || (is_array($callingUser) && count($callingUser) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($callingUser) && !is_string($callingUser)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($callingUser)), __LINE__);
        }
        $this->CallingUser = $callingUser;
        return $this;
    }
    /**
     * Get DbVersion value
     * @return string
     */
    public function getDbVersion()
    {
        return $this->DbVersion;
    }
    /**
     * Set DbVersion value
     * @param string $dbVersion
     * @return \Onesource\StructType\HostRequestInfo
     */
    public function setDbVersion($dbVersion = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($dbVersion) && strlen($dbVersion) > 100) || (is_array($dbVersion) && count($dbVersion) > 100)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 100 element(s) or a scalar of 100 character(s) at most, "%d" length given', is_scalar($dbVersion) ? strlen($dbVersion) : count($dbVersion)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($dbVersion) && strlen($dbVersion) < 1) || (is_array($dbVersion) && count($dbVersion) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($dbVersion) && !is_string($dbVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dbVersion)), __LINE__);
        }
        $this->DbVersion = $dbVersion;
        return $this;
    }
    /**
     * Get ErpVersion value
     * @return string
     */
    public function getErpVersion()
    {
        return $this->ErpVersion;
    }
    /**
     * Set ErpVersion value
     * @param string $erpVersion
     * @return \Onesource\StructType\HostRequestInfo
     */
    public function setErpVersion($erpVersion = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($erpVersion) && strlen($erpVersion) > 100) || (is_array($erpVersion) && count($erpVersion) > 100)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 100 element(s) or a scalar of 100 character(s) at most, "%d" length given', is_scalar($erpVersion) ? strlen($erpVersion) : count($erpVersion)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($erpVersion) && strlen($erpVersion) < 1) || (is_array($erpVersion) && count($erpVersion) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($erpVersion) && !is_string($erpVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($erpVersion)), __LINE__);
        }
        $this->ErpVersion = $erpVersion;
        return $this;
    }
    /**
     * Get HostRequestId value
     * @return string
     */
    public function getHostRequestId()
    {
        return $this->HostRequestId;
    }
    /**
     * Set HostRequestId value
     * @param string $hostRequestId
     * @return \Onesource\StructType\HostRequestInfo
     */
    public function setHostRequestId($hostRequestId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($hostRequestId) && strlen($hostRequestId) > 100) || (is_array($hostRequestId) && count($hostRequestId) > 100)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 100 element(s) or a scalar of 100 character(s) at most, "%d" length given', is_scalar($hostRequestId) ? strlen($hostRequestId) : count($hostRequestId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($hostRequestId) && strlen($hostRequestId) < 1) || (is_array($hostRequestId) && count($hostRequestId) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($hostRequestId) && !is_string($hostRequestId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hostRequestId)), __LINE__);
        }
        $this->HostRequestId = $hostRequestId;
        return $this;
    }
    /**
     * Get HostRequestLoggingId value
     * @return string
     */
    public function getHostRequestLoggingId()
    {
        return $this->HostRequestLoggingId;
    }
    /**
     * Set HostRequestLoggingId value
     * @param string $hostRequestLoggingId
     * @return \Onesource\StructType\HostRequestInfo
     */
    public function setHostRequestLoggingId($hostRequestLoggingId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($hostRequestLoggingId) && strlen($hostRequestLoggingId) > 100) || (is_array($hostRequestLoggingId) && count($hostRequestLoggingId) > 100)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 100 element(s) or a scalar of 100 character(s) at most, "%d" length given', is_scalar($hostRequestLoggingId) ? strlen($hostRequestLoggingId) : count($hostRequestLoggingId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($hostRequestLoggingId) && strlen($hostRequestLoggingId) < 1) || (is_array($hostRequestLoggingId) && count($hostRequestLoggingId) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($hostRequestLoggingId) && !is_string($hostRequestLoggingId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hostRequestLoggingId)), __LINE__);
        }
        $this->HostRequestLoggingId = $hostRequestLoggingId;
        return $this;
    }
    /**
     * Get HostSystemNumber value
     * @return string
     */
    public function getHostSystemNumber()
    {
        return $this->HostSystemNumber;
    }
    /**
     * Set HostSystemNumber value
     * @param string $hostSystemNumber
     * @return \Onesource\StructType\HostRequestInfo
     */
    public function setHostSystemNumber($hostSystemNumber = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($hostSystemNumber) && strlen($hostSystemNumber) > 100) || (is_array($hostSystemNumber) && count($hostSystemNumber) > 100)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 100 element(s) or a scalar of 100 character(s) at most, "%d" length given', is_scalar($hostSystemNumber) ? strlen($hostSystemNumber) : count($hostSystemNumber)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($hostSystemNumber) && strlen($hostSystemNumber) < 1) || (is_array($hostSystemNumber) && count($hostSystemNumber) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($hostSystemNumber) && !is_string($hostSystemNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hostSystemNumber)), __LINE__);
        }
        $this->HostSystemNumber = $hostSystemNumber;
        return $this;
    }
    /**
     * Get IntegrationVersion value
     * @return string
     */
    public function getIntegrationVersion()
    {
        return $this->IntegrationVersion;
    }
    /**
     * Set IntegrationVersion value
     * @param string $integrationVersion
     * @return \Onesource\StructType\HostRequestInfo
     */
    public function setIntegrationVersion($integrationVersion = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($integrationVersion) && strlen($integrationVersion) > 100) || (is_array($integrationVersion) && count($integrationVersion) > 100)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 100 element(s) or a scalar of 100 character(s) at most, "%d" length given', is_scalar($integrationVersion) ? strlen($integrationVersion) : count($integrationVersion)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($integrationVersion) && strlen($integrationVersion) < 1) || (is_array($integrationVersion) && count($integrationVersion) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($integrationVersion) && !is_string($integrationVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($integrationVersion)), __LINE__);
        }
        $this->IntegrationVersion = $integrationVersion;
        return $this;
    }
    /**
     * Get SdkVersion value
     * @return string
     */
    public function getSdkVersion()
    {
        return $this->SdkVersion;
    }
    /**
     * Set SdkVersion value
     * @param string $sdkVersion
     * @return \Onesource\StructType\HostRequestInfo
     */
    public function setSdkVersion($sdkVersion = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($sdkVersion) && strlen($sdkVersion) > 100) || (is_array($sdkVersion) && count($sdkVersion) > 100)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 100 element(s) or a scalar of 100 character(s) at most, "%d" length given', is_scalar($sdkVersion) ? strlen($sdkVersion) : count($sdkVersion)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($sdkVersion) && strlen($sdkVersion) < 1) || (is_array($sdkVersion) && count($sdkVersion) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($sdkVersion) && !is_string($sdkVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sdkVersion)), __LINE__);
        }
        $this->SdkVersion = $sdkVersion;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Onesource\StructType\HostRequestInfo
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
