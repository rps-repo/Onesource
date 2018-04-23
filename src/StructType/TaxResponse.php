<?php

namespace Onesource\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxResponse StructType
 * @subpackage Structs
 */
class TaxResponse extends AbstractStructBase
{
    /**
     * The HostRequestId
     * Meta informations extracted from the WSDL
     * - ref: HostRequestId
     * - maxLength: 100
     * - minLength: 1
     * @var string
     */
    public $HostRequestId;
    /**
     * The HostRequestLoggingId
     * Meta informations extracted from the WSDL
     * - ref: HostRequestLoggingId
     * - maxLength: 100
     * - minLength: 1
     * @var string
     */
    public $HostRequestLoggingId;
    /**
     * The RequestStatus
     * Meta informations extracted from the WSDL
     * - documentation: This element contains the overall status of the request to which this result was generated. If the status reflects a failure or partial success it will contain information about the first document in the request that failed. Failures
     * in subsequent documents are not reflected here.
     * @var \Onesource\StructType\Status
     */
    public $RequestStatus;
    /**
     * The TaxDocuments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Onesource\StructType\TaxDocumentCollection
     */
    public $TaxDocuments;
    /**
     * Constructor method for TaxResponse
     * @uses TaxResponse::setHostRequestId()
     * @uses TaxResponse::setHostRequestLoggingId()
     * @uses TaxResponse::setRequestStatus()
     * @uses TaxResponse::setTaxDocuments()
     * @param string $hostRequestId
     * @param string $hostRequestLoggingId
     * @param \Onesource\StructType\Status $requestStatus
     * @param \Onesource\StructType\TaxDocumentCollection $taxDocuments
     */
    public function __construct($hostRequestId = null, $hostRequestLoggingId = null, \Onesource\StructType\Status $requestStatus = null, \Onesource\StructType\TaxDocumentCollection $taxDocuments = null)
    {
        $this
            ->setHostRequestId($hostRequestId)
            ->setHostRequestLoggingId($hostRequestLoggingId)
            ->setRequestStatus($requestStatus)
            ->setTaxDocuments($taxDocuments);
    }
    /**
     * Get HostRequestId value
     * @return string|null
     */
    public function getHostRequestId()
    {
        return $this->HostRequestId;
    }
    /**
     * Set HostRequestId value
     * @param string $hostRequestId
     * @return \Onesource\StructType\TaxResponse
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
     * @return string|null
     */
    public function getHostRequestLoggingId()
    {
        return $this->HostRequestLoggingId;
    }
    /**
     * Set HostRequestLoggingId value
     * @param string $hostRequestLoggingId
     * @return \Onesource\StructType\TaxResponse
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
     * Get RequestStatus value
     * @return \Onesource\StructType\Status|null
     */
    public function getRequestStatus()
    {
        return $this->RequestStatus;
    }
    /**
     * Set RequestStatus value
     * @param \Onesource\StructType\Status $requestStatus
     * @return \Onesource\StructType\TaxResponse
     */
    public function setRequestStatus(\Onesource\StructType\Status $requestStatus = null)
    {
        $this->RequestStatus = $requestStatus;
        return $this;
    }
    /**
     * Get TaxDocuments value
     * @return \Onesource\StructType\TaxDocumentCollection|null
     */
    public function getTaxDocuments()
    {
        return $this->TaxDocuments;
    }
    /**
     * Set TaxDocuments value
     * @param \Onesource\StructType\TaxDocumentCollection $taxDocuments
     * @return \Onesource\StructType\TaxResponse
     */
    public function setTaxDocuments(\Onesource\StructType\TaxDocumentCollection $taxDocuments = null)
    {
        $this->TaxDocuments = $taxDocuments;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Onesource\StructType\TaxResponse
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
