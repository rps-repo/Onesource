<?php

namespace Onesource\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxDocumentCollection StructType
 * @subpackage Structs
 */
class TaxDocumentCollection extends AbstractStructBase
{
    /**
     * The TaxDocument
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Onesource\StructType\TaxDocument[]
     */
    public $TaxDocument;
    /**
     * Constructor method for TaxDocumentCollection
     * @uses TaxDocumentCollection::setTaxDocument()
     * @param \Onesource\StructType\TaxDocument[] $taxDocument
     */
    public function __construct(array $taxDocument = array())
    {
        $this
            ->setTaxDocument($taxDocument);
    }
    /**
     * Get TaxDocument value
     * @return \Onesource\StructType\TaxDocument[]|null
     */
    public function getTaxDocument()
    {
        return $this->TaxDocument;
    }
    /**
     * Set TaxDocument value
     * @throws \InvalidArgumentException
     * @param \Onesource\StructType\TaxDocument[] $taxDocument
     * @return \Onesource\StructType\TaxDocumentCollection
     */
    public function setTaxDocument(array $taxDocument = array())
    {
        foreach ($taxDocument as $taxDocumentCollectionTaxDocumentItem) {
            // validation for constraint: itemType
            if (!$taxDocumentCollectionTaxDocumentItem instanceof \Onesource\StructType\TaxDocument) {
                throw new \InvalidArgumentException(sprintf('The TaxDocument property can only contain items of \Onesource\StructType\TaxDocument, "%s" given', is_object($taxDocumentCollectionTaxDocumentItem) ? get_class($taxDocumentCollectionTaxDocumentItem) : gettype($taxDocumentCollectionTaxDocumentItem)), __LINE__);
            }
        }
        $this->TaxDocument = $taxDocument;
        return $this;
    }
    /**
     * Add item to TaxDocument value
     * @throws \InvalidArgumentException
     * @param \Onesource\StructType\TaxDocument $item
     * @return \Onesource\StructType\TaxDocumentCollection
     */
    public function addToTaxDocument(\Onesource\StructType\TaxDocument $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Onesource\StructType\TaxDocument) {
            throw new \InvalidArgumentException(sprintf('The TaxDocument property can only contain items of \Onesource\StructType\TaxDocument, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TaxDocument[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Onesource\StructType\TaxDocumentCollection
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
