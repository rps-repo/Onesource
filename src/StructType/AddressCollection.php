<?php

namespace Onesource\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressCollection StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AddressCollection extends AbstractStructBase
{
    /**
     * The BillToAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Onesource\StructType\Address
     */
    public $BillToAddress;
    /**
     * The OrderAcceptanceAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Onesource\StructType\Address
     */
    public $OrderAcceptanceAddress;
    /**
     * The OrderOriginAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Onesource\StructType\Address
     */
    public $OrderOriginAddress;
    /**
     * The ShipFromAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Onesource\StructType\Address
     */
    public $ShipFromAddress;
    /**
     * The ShipToAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Onesource\StructType\Address
     */
    public $ShipToAddress;
    /**
     * Constructor method for AddressCollection
     * @uses AddressCollection::setBillToAddress()
     * @uses AddressCollection::setOrderAcceptanceAddress()
     * @uses AddressCollection::setOrderOriginAddress()
     * @uses AddressCollection::setShipFromAddress()
     * @uses AddressCollection::setShipToAddress()
     * @param \Onesource\StructType\Address $billToAddress
     * @param \Onesource\StructType\Address $orderAcceptanceAddress
     * @param \Onesource\StructType\Address $orderOriginAddress
     * @param \Onesource\StructType\Address $shipFromAddress
     * @param \Onesource\StructType\Address $shipToAddress
     */
    public function __construct(\Onesource\StructType\Address $billToAddress = null, \Onesource\StructType\Address $orderAcceptanceAddress = null, \Onesource\StructType\Address $orderOriginAddress = null, \Onesource\StructType\Address $shipFromAddress = null, \Onesource\StructType\Address $shipToAddress = null)
    {
        $this
            ->setBillToAddress($billToAddress)
            ->setOrderAcceptanceAddress($orderAcceptanceAddress)
            ->setOrderOriginAddress($orderOriginAddress)
            ->setShipFromAddress($shipFromAddress)
            ->setShipToAddress($shipToAddress);
    }
    /**
     * Get BillToAddress value
     * @return \Onesource\StructType\Address|null
     */
    public function getBillToAddress()
    {
        return $this->BillToAddress;
    }
    /**
     * Set BillToAddress value
     * @param \Onesource\StructType\Address $billToAddress
     * @return \Onesource\StructType\AddressCollection
     */
    public function setBillToAddress(\Onesource\StructType\Address $billToAddress = null)
    {
        $this->BillToAddress = $billToAddress;
        return $this;
    }
    /**
     * Get OrderAcceptanceAddress value
     * @return \Onesource\StructType\Address|null
     */
    public function getOrderAcceptanceAddress()
    {
        return $this->OrderAcceptanceAddress;
    }
    /**
     * Set OrderAcceptanceAddress value
     * @param \Onesource\StructType\Address $orderAcceptanceAddress
     * @return \Onesource\StructType\AddressCollection
     */
    public function setOrderAcceptanceAddress(\Onesource\StructType\Address $orderAcceptanceAddress = null)
    {
        $this->OrderAcceptanceAddress = $orderAcceptanceAddress;
        return $this;
    }
    /**
     * Get OrderOriginAddress value
     * @return \Onesource\StructType\Address|null
     */
    public function getOrderOriginAddress()
    {
        return $this->OrderOriginAddress;
    }
    /**
     * Set OrderOriginAddress value
     * @param \Onesource\StructType\Address $orderOriginAddress
     * @return \Onesource\StructType\AddressCollection
     */
    public function setOrderOriginAddress(\Onesource\StructType\Address $orderOriginAddress = null)
    {
        $this->OrderOriginAddress = $orderOriginAddress;
        return $this;
    }
    /**
     * Get ShipFromAddress value
     * @return \Onesource\StructType\Address|null
     */
    public function getShipFromAddress()
    {
        return $this->ShipFromAddress;
    }
    /**
     * Set ShipFromAddress value
     * @param \Onesource\StructType\Address $shipFromAddress
     * @return \Onesource\StructType\AddressCollection
     */
    public function setShipFromAddress(\Onesource\StructType\Address $shipFromAddress = null)
    {
        $this->ShipFromAddress = $shipFromAddress;
        return $this;
    }
    /**
     * Get ShipToAddress value
     * @return \Onesource\StructType\Address|null
     */
    public function getShipToAddress()
    {
        return $this->ShipToAddress;
    }
    /**
     * Set ShipToAddress value
     * @param \Onesource\StructType\Address $shipToAddress
     * @return \Onesource\StructType\AddressCollection
     */
    public function setShipToAddress(\Onesource\StructType\Address $shipToAddress = null)
    {
        $this->ShipToAddress = $shipToAddress;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Onesource\StructType\AddressCollection
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
