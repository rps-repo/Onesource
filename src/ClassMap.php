<?php

namespace Onesource;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'TaxRequest' => '\\Onesource\\StructType\\TaxRequest',
            'TaxResponse' => '\\Onesource\\StructType\\TaxResponse',
            'AddressCollection' => '\\Onesource\\StructType\\AddressCollection',
            'Address' => '\\Onesource\\StructType\\Address',
            'BuyerRegistrations' => '\\Onesource\\StructType\\BuyerRegistrations',
            'ChargeCollection' => '\\Onesource\\StructType\\ChargeCollection',
            'Charge' => '\\Onesource\\StructType\\Charge',
            'ChargeDetailCollection' => '\\Onesource\\StructType\\ChargeDetailCollection',
            'ChargeDetail' => '\\Onesource\\StructType\\ChargeDetail',
            'DocumentCollection' => '\\Onesource\\StructType\\DocumentCollection',
            'Document' => '\\Onesource\\StructType\\Document',
            'Attributes' => '\\Onesource\\StructType\\Attributes',
            'Dates' => '\\Onesource\\StructType\\Dates',
            'HostRequestInfo' => '\\Onesource\\StructType\\HostRequestInfo',
            'LineCollection' => '\\Onesource\\StructType\\LineCollection',
            'Line' => '\\Onesource\\StructType\\Line',
            'Amounts' => '\\Onesource\\StructType\\Amounts',
            'Quantity' => '\\Onesource\\StructType\\Quantity',
            'ReferenceDocument' => '\\Onesource\\StructType\\ReferenceDocument',
            'Registration' => '\\Onesource\\StructType\\Registration',
            'Registrations' => '\\Onesource\\StructType\\Registrations',
            'SellerRegistrations' => '\\Onesource\\StructType\\SellerRegistrations',
            'Status' => '\\Onesource\\StructType\\Status',
            'TaxabilityInfo' => '\\Onesource\\StructType\\TaxabilityInfo',
            'TaxDetailCollection' => '\\Onesource\\StructType\\TaxDetailCollection',
            'TaxDetail' => '\\Onesource\\StructType\\TaxDetail',
            'TaxDocumentCollection' => '\\Onesource\\StructType\\TaxDocumentCollection',
            'TaxDocument' => '\\Onesource\\StructType\\TaxDocument',
            'UseTaxInformation' => '\\Onesource\\StructType\\UseTaxInformation',
            'TaxLineCollection' => '\\Onesource\\StructType\\TaxLineCollection',
            'TaxLine' => '\\Onesource\\StructType\\TaxLine',
            'TaxSummary' => '\\Onesource\\StructType\\TaxSummary',
            'UserAttributeContainer' => '\\Onesource\\StructType\\UserAttributeContainer',
            'UserAttributes' => '\\Onesource\\StructType\\UserAttributes',
            'ZoneTaxCollection' => '\\Onesource\\StructType\\ZoneTaxCollection',
            'ZoneTaxSummary' => '\\Onesource\\StructType\\ZoneTaxSummary',
        );
    }
}
