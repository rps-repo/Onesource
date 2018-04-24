<?php

namespace Onesource\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserAttributeContainer StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class UserAttributeContainer extends AbstractStructBase
{
    /**
     * The UserAttributes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * - nillable: true
     * @var \Onesource\StructType\UserAttributes[]
     */
    public $UserAttributes;
    /**
     * Constructor method for UserAttributeContainer
     * @uses UserAttributeContainer::setUserAttributes()
     * @param \Onesource\StructType\UserAttributes[] $userAttributes
     */
    public function __construct(array $userAttributes = array())
    {
        $this
            ->setUserAttributes($userAttributes);
    }
    /**
     * Get UserAttributes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Onesource\StructType\UserAttributes[]|null
     */
    public function getUserAttributes()
    {
        return isset($this->UserAttributes) ? $this->UserAttributes : null;
    }
    /**
     * Set UserAttributes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Onesource\StructType\UserAttributes[] $userAttributes
     * @return \Onesource\StructType\UserAttributeContainer
     */
    public function setUserAttributes(array $userAttributes = array())
    {
        foreach ($userAttributes as $userAttributeContainerUserAttributesItem) {
            // validation for constraint: itemType
            if (!$userAttributeContainerUserAttributesItem instanceof \Onesource\StructType\UserAttributes) {
                throw new \InvalidArgumentException(sprintf('The UserAttributes property can only contain items of \Onesource\StructType\UserAttributes, "%s" given', is_object($userAttributeContainerUserAttributesItem) ? get_class($userAttributeContainerUserAttributesItem) : gettype($userAttributeContainerUserAttributesItem)), __LINE__);
            }
        }
        if (is_null($userAttributes) || (is_array($userAttributes) && empty($userAttributes))) {
            unset($this->UserAttributes);
        } else {
            $this->UserAttributes = $userAttributes;
        }
        return $this;
    }
    /**
     * Add item to UserAttributes value
     * @throws \InvalidArgumentException
     * @param \Onesource\StructType\UserAttributes $item
     * @return \Onesource\StructType\UserAttributeContainer
     */
    public function addToUserAttributes(\Onesource\StructType\UserAttributes $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Onesource\StructType\UserAttributes) {
            throw new \InvalidArgumentException(sprintf('The UserAttributes property can only contain items of \Onesource\StructType\UserAttributes, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->UserAttributes[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Onesource\StructType\UserAttributeContainer
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
