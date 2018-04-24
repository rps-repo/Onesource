<?php

namespace Onesource\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxRequest StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TaxRequest extends AbstractStructBase
{
    /**
     * The HostRequestInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Onesource\StructType\HostRequestInfo
     */
    public $HostRequestInfo;
    /**
     * The ExternalCompanyId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - maxLength: 100
     * - minLength: 1
     * @var string
     */
    public $ExternalCompanyId;
    /**
     * The Documents
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Onesource\StructType\DocumentCollection
     */
    public $Documents;
    /**
     * Constructor method for TaxRequest
     * @uses TaxRequest::setHostRequestInfo()
     * @uses TaxRequest::setExternalCompanyId()
     * @uses TaxRequest::setDocuments()
     * @param \Onesource\StructType\HostRequestInfo $hostRequestInfo
     * @param string $externalCompanyId
     * @param \Onesource\StructType\DocumentCollection $documents
     */
    public function __construct(\Onesource\StructType\HostRequestInfo $hostRequestInfo = null, $externalCompanyId = null, \Onesource\StructType\DocumentCollection $documents = null)
    {
        $this
            ->setHostRequestInfo($hostRequestInfo)
            ->setExternalCompanyId($externalCompanyId)
            ->setDocuments($documents);
    }
    /**
     * Get HostRequestInfo value
     * @return \Onesource\StructType\HostRequestInfo
     */
    public function getHostRequestInfo()
    {
        return $this->HostRequestInfo;
    }
    /**
     * Set HostRequestInfo value
     * @param \Onesource\StructType\HostRequestInfo $hostRequestInfo
     * @return \Onesource\StructType\TaxRequest
     */
    public function setHostRequestInfo(\Onesource\StructType\HostRequestInfo $hostRequestInfo = null)
    {
        $this->HostRequestInfo = $hostRequestInfo;
        return $this;
    }
    /**
     * Get ExternalCompanyId value
     * @return string
     */
    public function getExternalCompanyId()
    {
        return $this->ExternalCompanyId;
    }
    /**
     * Set ExternalCompanyId value
     * @param string $externalCompanyId
     * @return \Onesource\StructType\TaxRequest
     */
    public function setExternalCompanyId($externalCompanyId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($externalCompanyId) && strlen($externalCompanyId) > 100) || (is_array($externalCompanyId) && count($externalCompanyId) > 100)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 100 element(s) or a scalar of 100 character(s) at most, "%d" length given', is_scalar($externalCompanyId) ? strlen($externalCompanyId) : count($externalCompanyId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($externalCompanyId) && strlen($externalCompanyId) < 1) || (is_array($externalCompanyId) && count($externalCompanyId) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($externalCompanyId) && !is_string($externalCompanyId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($externalCompanyId)), __LINE__);
        }
        $this->ExternalCompanyId = $externalCompanyId;
        return $this;
    }
    /**
     * Get Documents value
     * @return \Onesource\StructType\DocumentCollection
     */
    public function getDocuments()
    {
        return $this->Documents;
    }
    /**
     * Set Documents value
     * @param \Onesource\StructType\DocumentCollection $documents
     * @return \Onesource\StructType\TaxRequest
     */
    public function setDocuments(\Onesource\StructType\DocumentCollection $documents = null)
    {
        $this->Documents = $documents;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Onesource\StructType\TaxRequest
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
