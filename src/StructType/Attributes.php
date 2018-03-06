<?php

namespace Onesource\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Attributes StructType
 * @subpackage Structs
 */
class Attributes extends AbstractStructBase
{
    /**
     * The IsAuditResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $IsAuditResult;
    /**
     * The AmountType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $AmountType;
    /**
     * The CompanyRole
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $CompanyRole;
    /**
     * The CurrencyCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - maxLength: 3
     * - minLength: 1
     * @var string
     */
    public $CurrencyCode;
    /**
     * The DocumentType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - maxLength: 50
     * - minLength: 1
     * @var string
     */
    public $DocumentType;
    /**
     * The IsCredit
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $IsCredit;
    /**
     * The IsExempt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $IsExempt;
    /**
     * The ExemptReason
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - maxLength: 2
     * - minLength: 1
     * @var string
     */
    public $ExemptReason;
    /**
     * The PointOfTitleTransfer
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PointOfTitleTransfer;
    /**
     * The ReferenceDocumentInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Onesource\StructType\ReferenceDocument
     */
    public $ReferenceDocumentInfo;
    /**
     * The ProductCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - maxLength: 4
     * - minLength: 1
     * @var string
     */
    public $ProductCode;
    /**
     * The PartNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - maxLength: 100
     * - minLength: 1
     * @var string
     */
    public $PartNumber;
    /**
     * The PartDescription
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - maxLength: 200
     * - minLength: 1
     * @var string
     */
    public $PartDescription;
    /**
     * The UserAttributeContainer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Onesource\StructType\UserAttributeContainer
     */
    public $UserAttributeContainer;
    /**
     * Constructor method for Attributes
     * @uses Attributes::setIsAuditResult()
     * @uses Attributes::setAmountType()
     * @uses Attributes::setCompanyRole()
     * @uses Attributes::setCurrencyCode()
     * @uses Attributes::setDocumentType()
     * @uses Attributes::setIsCredit()
     * @uses Attributes::setIsExempt()
     * @uses Attributes::setExemptReason()
     * @uses Attributes::setPointOfTitleTransfer()
     * @uses Attributes::setReferenceDocumentInfo()
     * @uses Attributes::setProductCode()
     * @uses Attributes::setPartNumber()
     * @uses Attributes::setPartDescription()
     * @uses Attributes::setUserAttributeContainer()
     * @param bool $isAuditResult
     * @param string $amountType
     * @param string $companyRole
     * @param string $currencyCode
     * @param string $documentType
     * @param bool $isCredit
     * @param bool $isExempt
     * @param string $exemptReason
     * @param string $pointOfTitleTransfer
     * @param \Onesource\StructType\ReferenceDocument $referenceDocumentInfo
     * @param string $productCode
     * @param string $partNumber
     * @param string $partDescription
     * @param \Onesource\StructType\UserAttributeContainer $userAttributeContainer
     */
    public function __construct($isAuditResult = null, $amountType = null, $companyRole = null, $currencyCode = null, $documentType = null, $isCredit = null, $isExempt = null, $exemptReason = null, $pointOfTitleTransfer = null, \Onesource\StructType\ReferenceDocument $referenceDocumentInfo = null, $productCode = null, $partNumber = null, $partDescription = null, \Onesource\StructType\UserAttributeContainer $userAttributeContainer = null)
    {
        $this
            ->setIsAuditResult($isAuditResult)
            ->setAmountType($amountType)
            ->setCompanyRole($companyRole)
            ->setCurrencyCode($currencyCode)
            ->setDocumentType($documentType)
            ->setIsCredit($isCredit)
            ->setIsExempt($isExempt)
            ->setExemptReason($exemptReason)
            ->setPointOfTitleTransfer($pointOfTitleTransfer)
            ->setReferenceDocumentInfo($referenceDocumentInfo)
            ->setProductCode($productCode)
            ->setPartNumber($partNumber)
            ->setPartDescription($partDescription)
            ->setUserAttributeContainer($userAttributeContainer);
    }
    /**
     * Get IsAuditResult value
     * @return bool
     */
    public function getIsAuditResult()
    {
        return $this->IsAuditResult;
    }
    /**
     * Set IsAuditResult value
     * @param bool $isAuditResult
     * @return \Onesource\StructType\Attributes
     */
    public function setIsAuditResult($isAuditResult = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAuditResult) && !is_bool($isAuditResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAuditResult)), __LINE__);
        }
        $this->IsAuditResult = $isAuditResult;
        return $this;
    }
    /**
     * Get AmountType value
     * @return string
     */
    public function getAmountType()
    {
        return $this->AmountType;
    }
    /**
     * Set AmountType value
     * @uses \Onesource\EnumType\AmountType::valueIsValid()
     * @uses \Onesource\EnumType\AmountType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $amountType
     * @return \Onesource\StructType\Attributes
     */
    public function setAmountType($amountType = null)
    {
        // validation for constraint: enumeration
        if (!\Onesource\EnumType\AmountType::valueIsValid($amountType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $amountType, implode(', ', \Onesource\EnumType\AmountType::getValidValues())), __LINE__);
        }
        $this->AmountType = $amountType;
        return $this;
    }
    /**
     * Get CompanyRole value
     * @return string
     */
    public function getCompanyRole()
    {
        return $this->CompanyRole;
    }
    /**
     * Set CompanyRole value
     * @uses \Onesource\EnumType\CompanyRole::valueIsValid()
     * @uses \Onesource\EnumType\CompanyRole::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $companyRole
     * @return \Onesource\StructType\Attributes
     */
    public function setCompanyRole($companyRole = null)
    {
        // validation for constraint: enumeration
        if (!\Onesource\EnumType\CompanyRole::valueIsValid($companyRole)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $companyRole, implode(', ', \Onesource\EnumType\CompanyRole::getValidValues())), __LINE__);
        }
        $this->CompanyRole = $companyRole;
        return $this;
    }
    /**
     * Get CurrencyCode value
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->CurrencyCode;
    }
    /**
     * Set CurrencyCode value
     * @param string $currencyCode
     * @return \Onesource\StructType\Attributes
     */
    public function setCurrencyCode($currencyCode = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($currencyCode) && strlen($currencyCode) > 3) || (is_array($currencyCode) && count($currencyCode) > 3)) {
            throw new \InvalidArgumentException(sprintf('currencyCode: Invalid length, please provide an array with 3 element(s) or a scalar of 3 character(s) at most, "%d" length given', is_scalar($currencyCode) ? strlen($currencyCode) : count($currencyCode)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($currencyCode) && strlen($currencyCode) < 1) || (is_array($currencyCode) && count($currencyCode) < 1)) {
            throw new \InvalidArgumentException('currencyCode: Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new \InvalidArgumentException(sprintf('currencyCode: Invalid value, please provide a string, "%s" given', gettype($currencyCode)), __LINE__);
        }
        $this->CurrencyCode = $currencyCode;
        return $this;
    }
    /**
     * Get DocumentType value
     * @return string
     */
    public function getDocumentType()
    {
        return $this->DocumentType;
    }
    /**
     * Set DocumentType value
     * @param string $documentType
     * @return \Onesource\StructType\Attributes
     */
    public function setDocumentType($documentType = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($documentType) && strlen($documentType) > 50) || (is_array($documentType) && count($documentType) > 50)) {
            throw new \InvalidArgumentException(sprintf('documentType: Invalid length, please provide an array with 50 element(s) or a scalar of 50 character(s) at most, "%d" length given', is_scalar($documentType) ? strlen($documentType) : count($documentType)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($documentType) && strlen($documentType) < 1) || (is_array($documentType) && count($documentType) < 1)) {
            throw new \InvalidArgumentException('documentType: Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($documentType) && !is_string($documentType)) {
            throw new \InvalidArgumentException(sprintf('documentType: Invalid value, please provide a string, "%s" given', gettype($documentType)), __LINE__);
        }
        $this->DocumentType = $documentType;
        return $this;
    }
    /**
     * Get IsCredit value
     * @return bool|null
     */
    public function getIsCredit()
    {
        return $this->IsCredit;
    }
    /**
     * Set IsCredit value
     * @param bool $isCredit
     * @return \Onesource\StructType\Attributes
     */
    public function setIsCredit($isCredit = null)
    {
        // validation for constraint: boolean
        if (!is_null($isCredit) && !is_bool($isCredit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isCredit)), __LINE__);
        }
        $this->IsCredit = $isCredit;
        return $this;
    }
    /**
     * Get IsExempt value
     * @return bool|null
     */
    public function getIsExempt()
    {
        return $this->IsExempt;
    }
    /**
     * Set IsExempt value
     * @param bool $isExempt
     * @return \Onesource\StructType\Attributes
     */
    public function setIsExempt($isExempt = null)
    {
        // validation for constraint: boolean
        if (!is_null($isExempt) && !is_bool($isExempt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isExempt)), __LINE__);
        }
        $this->IsExempt = $isExempt;
        return $this;
    }
    /**
     * Get ExemptReason value
     * @return string|null
     */
    public function getExemptReason()
    {
        return $this->ExemptReason;
    }
    /**
     * Set ExemptReason value
     * @param string $exemptReason
     * @return \Onesource\StructType\Attributes
     */
    public function setExemptReason($exemptReason = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($exemptReason) && strlen($exemptReason) > 2) || (is_array($exemptReason) && count($exemptReason) > 2)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 2 element(s) or a scalar of 2 character(s) at most, "%d" length given', is_scalar($exemptReason) ? strlen($exemptReason) : count($exemptReason)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($exemptReason) && strlen($exemptReason) < 1) || (is_array($exemptReason) && count($exemptReason) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($exemptReason) && !is_string($exemptReason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($exemptReason)), __LINE__);
        }
        $this->ExemptReason = $exemptReason;
        return $this;
    }
    /**
     * Get PointOfTitleTransfer value
     * @return string|null
     */
    public function getPointOfTitleTransfer()
    {
        return $this->PointOfTitleTransfer;
    }
    /**
     * Set PointOfTitleTransfer value
     * @uses \Onesource\EnumType\PointOfTitleTransfer::valueIsValid()
     * @uses \Onesource\EnumType\PointOfTitleTransfer::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $pointOfTitleTransfer
     * @return \Onesource\StructType\Attributes
     */
    public function setPointOfTitleTransfer($pointOfTitleTransfer = null)
    {
        // validation for constraint: enumeration
        if (!\Onesource\EnumType\PointOfTitleTransfer::valueIsValid($pointOfTitleTransfer)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $pointOfTitleTransfer, implode(', ', \Onesource\EnumType\PointOfTitleTransfer::getValidValues())), __LINE__);
        }
        $this->PointOfTitleTransfer = $pointOfTitleTransfer;
        return $this;
    }
    /**
     * Get ReferenceDocumentInfo value
     * @return \Onesource\StructType\ReferenceDocument|null
     */
    public function getReferenceDocumentInfo()
    {
        return $this->ReferenceDocumentInfo;
    }
    /**
     * Set ReferenceDocumentInfo value
     * @param \Onesource\StructType\ReferenceDocument $referenceDocumentInfo
     * @return \Onesource\StructType\Attributes
     */
    public function setReferenceDocumentInfo(\Onesource\StructType\ReferenceDocument $referenceDocumentInfo = null)
    {
        $this->ReferenceDocumentInfo = $referenceDocumentInfo;
        return $this;
    }
    /**
     * Get ProductCode value
     * @return string|null
     */
    public function getProductCode()
    {
        return $this->ProductCode;
    }
    /**
     * Set ProductCode value
     * @param string $productCode
     * @return \Onesource\StructType\Attributes
     */
    public function setProductCode($productCode = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($productCode) && strlen($productCode) > 4) || (is_array($productCode) && count($productCode) > 4)) {
            throw new \InvalidArgumentException(sprintf('productCode: Invalid length, please provide an array with 4 element(s) or a scalar of 4 character(s) at most, "%d" length given', is_scalar($productCode) ? strlen($productCode) : count($productCode)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($productCode) && strlen($productCode) < 1) || (is_array($productCode) && count($productCode) < 1)) {
            throw new \InvalidArgumentException('productCode: Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($productCode) && !is_string($productCode)) {
            throw new \InvalidArgumentException(sprintf('productCode: Invalid value, please provide a string, "%s" given', gettype($productCode)), __LINE__);
        }
        $this->ProductCode = $productCode;
        return $this;
    }
    /**
     * Get PartNumber value
     * @return string|null
     */
    public function getPartNumber()
    {
        return $this->PartNumber;
    }
    /**
     * Set PartNumber value
     * @param string $partNumber
     * @return \Onesource\StructType\Attributes
     */
    public function setPartNumber($partNumber = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($partNumber) && strlen($partNumber) > 100) || (is_array($partNumber) && count($partNumber) > 100)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 100 element(s) or a scalar of 100 character(s) at most, "%d" length given', is_scalar($partNumber) ? strlen($partNumber) : count($partNumber)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($partNumber) && strlen($partNumber) < 1) || (is_array($partNumber) && count($partNumber) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($partNumber) && !is_string($partNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($partNumber)), __LINE__);
        }
        $this->PartNumber = $partNumber;
        return $this;
    }
    /**
     * Get PartDescription value
     * @return string|null
     */
    public function getPartDescription()
    {
        return $this->PartDescription;
    }
    /**
     * Set PartDescription value
     * @param string $partDescription
     * @return \Onesource\StructType\Attributes
     */
    public function setPartDescription($partDescription = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($partDescription) && strlen($partDescription) > 200) || (is_array($partDescription) && count($partDescription) > 200)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 200 element(s) or a scalar of 200 character(s) at most, "%d" length given', is_scalar($partDescription) ? strlen($partDescription) : count($partDescription)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($partDescription) && strlen($partDescription) < 1) || (is_array($partDescription) && count($partDescription) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($partDescription) && !is_string($partDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($partDescription)), __LINE__);
        }
        $this->PartDescription = $partDescription;
        return $this;
    }
    /**
     * Get UserAttributeContainer value
     * @return \Onesource\StructType\UserAttributeContainer|null
     */
    public function getUserAttributeContainer()
    {
        return $this->UserAttributeContainer;
    }
    /**
     * Set UserAttributeContainer value
     * @param \Onesource\StructType\UserAttributeContainer $userAttributeContainer
     * @return \Onesource\StructType\Attributes
     */
    public function setUserAttributeContainer(\Onesource\StructType\UserAttributeContainer $userAttributeContainer = null)
    {
        $this->UserAttributeContainer = $userAttributeContainer;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Onesource\StructType\Attributes
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
