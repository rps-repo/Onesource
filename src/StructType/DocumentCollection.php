<?php

namespace Onesource\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentCollection StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DocumentCollection extends AbstractStructBase
{
    /**
     * The Document
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \Onesource\StructType\Document[]
     */
    public $Document;
    /**
     * Constructor method for DocumentCollection
     * @uses DocumentCollection::setDocument()
     * @param \Onesource\StructType\Document[] $document
     */
    public function __construct(array $document = array())
    {
        $this
            ->setDocument($document);
    }
    /**
     * Get Document value
     * @return \Onesource\StructType\Document[]
     */
    public function getDocument()
    {
        return $this->Document;
    }
    /**
     * Set Document value
     * @throws \InvalidArgumentException
     * @param \Onesource\StructType\Document[] $document
     * @return \Onesource\StructType\DocumentCollection
     */
    public function setDocument(array $document = array())
    {
        foreach ($document as $documentCollectionDocumentItem) {
            // validation for constraint: itemType
            if (!$documentCollectionDocumentItem instanceof \Onesource\StructType\Document) {
                throw new \InvalidArgumentException(sprintf('The Document property can only contain items of \Onesource\StructType\Document, "%s" given', is_object($documentCollectionDocumentItem) ? get_class($documentCollectionDocumentItem) : gettype($documentCollectionDocumentItem)), __LINE__);
            }
        }
        $this->Document = $document;
        return $this;
    }
    /**
     * Add item to Document value
     * @throws \InvalidArgumentException
     * @param \Onesource\StructType\Document $item
     * @return \Onesource\StructType\DocumentCollection
     */
    public function addToDocument(\Onesource\StructType\Document $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Onesource\StructType\Document) {
            throw new \InvalidArgumentException(sprintf('The Document property can only contain items of \Onesource\StructType\Document, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Document[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Onesource\StructType\DocumentCollection
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
