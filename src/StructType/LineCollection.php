<?php

namespace Onesource\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LineCollection StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class LineCollection extends AbstractStructBase
{
    /**
     * The Line
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \Onesource\StructType\Line[]
     */
    public $Line;
    /**
     * Constructor method for LineCollection
     * @uses LineCollection::setLine()
     * @param \Onesource\StructType\Line[] $line
     */
    public function __construct(array $line = array())
    {
        $this
            ->setLine($line);
    }
    /**
     * Get Line value
     * @return \Onesource\StructType\Line[]
     */
    public function getLine()
    {
        return $this->Line;
    }
    /**
     * Set Line value
     * @throws \InvalidArgumentException
     * @param \Onesource\StructType\Line[] $line
     * @return \Onesource\StructType\LineCollection
     */
    public function setLine(array $line = array())
    {
        foreach ($line as $lineCollectionLineItem) {
            // validation for constraint: itemType
            if (!$lineCollectionLineItem instanceof \Onesource\StructType\Line) {
                throw new \InvalidArgumentException(sprintf('The Line property can only contain items of \Onesource\StructType\Line, "%s" given', is_object($lineCollectionLineItem) ? get_class($lineCollectionLineItem) : gettype($lineCollectionLineItem)), __LINE__);
            }
        }
        $this->Line = $line;
        return $this;
    }
    /**
     * Add item to Line value
     * @throws \InvalidArgumentException
     * @param \Onesource\StructType\Line $item
     * @return \Onesource\StructType\LineCollection
     */
    public function addToLine(\Onesource\StructType\Line $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Onesource\StructType\Line) {
            throw new \InvalidArgumentException(sprintf('The Line property can only contain items of \Onesource\StructType\Line, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Line[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Onesource\StructType\LineCollection
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
