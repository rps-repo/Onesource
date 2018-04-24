<?php

namespace Onesource\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Get extends SoapClientBase
{
    /**
     * Method to call the operation originally named GetTax
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Onesource\StructType\TaxRequest $parameters
     * @return \Onesource\StructType\TaxResponse|bool
     */
    public function GetTax(\Onesource\StructType\TaxRequest $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetTax($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \Onesource\StructType\TaxResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
