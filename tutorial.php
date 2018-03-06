<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://partnerdev.hostedtax.thomsonreuters.com/sabrix/services/taxservice/2009-12-20/taxservice?wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://partnerdev.hostedtax.thomsonreuters.com/sabrix/services/taxservice/2009-12-20/taxservice?wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Onesource\ClassMap::get(),
);
/**
 * Samples for Get ServiceType
 */
$get = new \Onesource\ServiceType\Get($options);
/**
 * Sample call for GetTax operation/method
 */
if ($get->GetTax(new \Onesource\StructType\TaxRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
