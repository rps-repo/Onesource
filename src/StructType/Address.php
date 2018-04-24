<?php

namespace Onesource\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Address StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Address extends AbstractStructBase
{
    /**
     * The Country
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - maxLength: 50
     * - minLength: 1
     * @var string
     */
    public $Country;
    /**
     * The Region
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - maxLength: 50
     * - minLength: 1
     * @var string
     */
    public $Region;
    /**
     * The County
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - maxLength: 50
     * - minLength: 1
     * @var string
     */
    public $County;
    /**
     * The City
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - maxLength: 50
     * - minLength: 1
     * @var string
     */
    public $City;
    /**
     * The Address1
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - maxLength: 150
     * - minLength: 1
     * @var string
     */
    public $Address1;
    /**
     * The Address2
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - maxLength: 150
     * - minLength: 1
     * @var string
     */
    public $Address2;
    /**
     * The Address3
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - maxLength: 150
     * - minLength: 1
     * @var string
     */
    public $Address3;
    /**
     * The PostalCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - maxLength: 50
     * - minLength: 1
     * @var string
     */
    public $PostalCode;
    /**
     * The GeoCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - maxLength: 50
     * - minLength: 1
     * @var string
     */
    public $GeoCode;
    /**
     * The PartnerNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - maxLength: 20
     * - minLength: 1
     * @var string
     */
    public $PartnerNumber;
    /**
     * The PartnerName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - maxLength: 100
     * - minLength: 1
     * @var string
     */
    public $PartnerName;
    /**
     * Constructor method for Address
     * @uses Address::setCountry()
     * @uses Address::setRegion()
     * @uses Address::setCounty()
     * @uses Address::setCity()
     * @uses Address::setAddress1()
     * @uses Address::setAddress2()
     * @uses Address::setAddress3()
     * @uses Address::setPostalCode()
     * @uses Address::setGeoCode()
     * @uses Address::setPartnerNumber()
     * @uses Address::setPartnerName()
     * @param string $country
     * @param string $region
     * @param string $county
     * @param string $city
     * @param string $address1
     * @param string $address2
     * @param string $address3
     * @param string $postalCode
     * @param string $geoCode
     * @param string $partnerNumber
     * @param string $partnerName
     */
    public function __construct($country = null, $region = null, $county = null, $city = null, $address1 = null, $address2 = null, $address3 = null, $postalCode = null, $geoCode = null, $partnerNumber = null, $partnerName = null)
    {
        $this
            ->setCountry($country)
            ->setRegion($region)
            ->setCounty($county)
            ->setCity($city)
            ->setAddress1($address1)
            ->setAddress2($address2)
            ->setAddress3($address3)
            ->setPostalCode($postalCode)
            ->setGeoCode($geoCode)
            ->setPartnerNumber($partnerNumber)
            ->setPartnerName($partnerName);
    }
    /**
     * Get Country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->Country;
    }
    /**
     * Set Country value
     * @param string $country
     * @return \Onesource\StructType\Address
     */
    public function setCountry($country = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($country) && strlen($country) > 50) || (is_array($country) && count($country) > 50)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 50 element(s) or a scalar of 50 character(s) at most, "%d" length given', is_scalar($country) ? strlen($country) : count($country)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($country) && strlen($country) < 1) || (is_array($country) && count($country) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->Country = $country;
        return $this;
    }
    /**
     * Get Region value
     * @return string|null
     */
    public function getRegion()
    {
        return $this->Region;
    }
    /**
     * Set Region value
     * @param string $region
     * @return \Onesource\StructType\Address
     */
    public function setRegion($region = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($region) && strlen($region) > 50) || (is_array($region) && count($region) > 50)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 50 element(s) or a scalar of 50 character(s) at most, "%d" length given', is_scalar($region) ? strlen($region) : count($region)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($region) && strlen($region) < 1) || (is_array($region) && count($region) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($region) && !is_string($region)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($region)), __LINE__);
        }
        $this->Region = $region;
        return $this;
    }
    /**
     * Get County value
     * @return string|null
     */
    public function getCounty()
    {
        return $this->County;
    }
    /**
     * Set County value
     * @param string $county
     * @return \Onesource\StructType\Address
     */
    public function setCounty($county = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($county) && strlen($county) > 50) || (is_array($county) && count($county) > 50)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 50 element(s) or a scalar of 50 character(s) at most, "%d" length given', is_scalar($county) ? strlen($county) : count($county)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($county) && strlen($county) < 1) || (is_array($county) && count($county) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($county) && !is_string($county)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($county)), __LINE__);
        }
        $this->County = $county;
        return $this;
    }
    /**
     * Get City value
     * @return string|null
     */
    public function getCity()
    {
        return $this->City;
    }
    /**
     * Set City value
     * @param string $city
     * @return \Onesource\StructType\Address
     */
    public function setCity($city = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($city) && strlen($city) > 50) || (is_array($city) && count($city) > 50)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 50 element(s) or a scalar of 50 character(s) at most, "%d" length given', is_scalar($city) ? strlen($city) : count($city)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($city) && strlen($city) < 1) || (is_array($city) && count($city) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($city)), __LINE__);
        }
        $this->City = $city;
        return $this;
    }
    /**
     * Get Address1 value
     * @return string|null
     */
    public function getAddress1()
    {
        return $this->Address1;
    }
    /**
     * Set Address1 value
     * @param string $address1
     * @return \Onesource\StructType\Address
     */
    public function setAddress1($address1 = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($address1) && strlen($address1) > 150) || (is_array($address1) && count($address1) > 150)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 150 element(s) or a scalar of 150 character(s) at most, "%d" length given', is_scalar($address1) ? strlen($address1) : count($address1)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($address1) && strlen($address1) < 1) || (is_array($address1) && count($address1) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($address1) && !is_string($address1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($address1)), __LINE__);
        }
        $this->Address1 = $address1;
        return $this;
    }
    /**
     * Get Address2 value
     * @return string|null
     */
    public function getAddress2()
    {
        return $this->Address2;
    }
    /**
     * Set Address2 value
     * @param string $address2
     * @return \Onesource\StructType\Address
     */
    public function setAddress2($address2 = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($address2) && strlen($address2) > 150) || (is_array($address2) && count($address2) > 150)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 150 element(s) or a scalar of 150 character(s) at most, "%d" length given', is_scalar($address2) ? strlen($address2) : count($address2)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($address2) && strlen($address2) < 1) || (is_array($address2) && count($address2) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($address2) && !is_string($address2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($address2)), __LINE__);
        }
        $this->Address2 = $address2;
        return $this;
    }
    /**
     * Get Address3 value
     * @return string|null
     */
    public function getAddress3()
    {
        return $this->Address3;
    }
    /**
     * Set Address3 value
     * @param string $address3
     * @return \Onesource\StructType\Address
     */
    public function setAddress3($address3 = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($address3) && strlen($address3) > 150) || (is_array($address3) && count($address3) > 150)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 150 element(s) or a scalar of 150 character(s) at most, "%d" length given', is_scalar($address3) ? strlen($address3) : count($address3)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($address3) && strlen($address3) < 1) || (is_array($address3) && count($address3) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($address3) && !is_string($address3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($address3)), __LINE__);
        }
        $this->Address3 = $address3;
        return $this;
    }
    /**
     * Get PostalCode value
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }
    /**
     * Set PostalCode value
     * @param string $postalCode
     * @return \Onesource\StructType\Address
     */
    public function setPostalCode($postalCode = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($postalCode) && strlen($postalCode) > 50) || (is_array($postalCode) && count($postalCode) > 50)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 50 element(s) or a scalar of 50 character(s) at most, "%d" length given', is_scalar($postalCode) ? strlen($postalCode) : count($postalCode)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($postalCode) && strlen($postalCode) < 1) || (is_array($postalCode) && count($postalCode) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postalCode)), __LINE__);
        }
        $this->PostalCode = $postalCode;
        return $this;
    }
    /**
     * Get GeoCode value
     * @return string|null
     */
    public function getGeoCode()
    {
        return $this->GeoCode;
    }
    /**
     * Set GeoCode value
     * @param string $geoCode
     * @return \Onesource\StructType\Address
     */
    public function setGeoCode($geoCode = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($geoCode) && strlen($geoCode) > 50) || (is_array($geoCode) && count($geoCode) > 50)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 50 element(s) or a scalar of 50 character(s) at most, "%d" length given', is_scalar($geoCode) ? strlen($geoCode) : count($geoCode)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($geoCode) && strlen($geoCode) < 1) || (is_array($geoCode) && count($geoCode) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($geoCode) && !is_string($geoCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($geoCode)), __LINE__);
        }
        $this->GeoCode = $geoCode;
        return $this;
    }
    /**
     * Get PartnerNumber value
     * @return string|null
     */
    public function getPartnerNumber()
    {
        return $this->PartnerNumber;
    }
    /**
     * Set PartnerNumber value
     * @param string $partnerNumber
     * @return \Onesource\StructType\Address
     */
    public function setPartnerNumber($partnerNumber = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($partnerNumber) && strlen($partnerNumber) > 20) || (is_array($partnerNumber) && count($partnerNumber) > 20)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 20 element(s) or a scalar of 20 character(s) at most, "%d" length given', is_scalar($partnerNumber) ? strlen($partnerNumber) : count($partnerNumber)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($partnerNumber) && strlen($partnerNumber) < 1) || (is_array($partnerNumber) && count($partnerNumber) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($partnerNumber) && !is_string($partnerNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($partnerNumber)), __LINE__);
        }
        $this->PartnerNumber = $partnerNumber;
        return $this;
    }
    /**
     * Get PartnerName value
     * @return string|null
     */
    public function getPartnerName()
    {
        return $this->PartnerName;
    }
    /**
     * Set PartnerName value
     * @param string $partnerName
     * @return \Onesource\StructType\Address
     */
    public function setPartnerName($partnerName = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($partnerName) && strlen($partnerName) > 100) || (is_array($partnerName) && count($partnerName) > 100)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 100 element(s) or a scalar of 100 character(s) at most, "%d" length given', is_scalar($partnerName) ? strlen($partnerName) : count($partnerName)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($partnerName) && strlen($partnerName) < 1) || (is_array($partnerName) && count($partnerName) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($partnerName) && !is_string($partnerName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($partnerName)), __LINE__);
        }
        $this->PartnerName = $partnerName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Onesource\StructType\Address
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
