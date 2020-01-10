<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for inputXMLType StructType
 * @subpackage Structs
 */
class InputXMLType extends AbstractStructBase
{
    /**
     * The xmlRequest
     * @var string
     */
    public $xmlRequest;
    /**
     * Constructor method for inputXMLType
     * @uses InputXMLType::setXmlRequest()
     * @param string $xmlRequest
     */
    public function __construct($xmlRequest = null)
    {
        $this
            ->setXmlRequest($xmlRequest);
    }
    /**
     * Get xmlRequest value
     * @return string|null
     */
    public function getXmlRequest()
    {
        return $this->xmlRequest;
    }
    /**
     * Set xmlRequest value
     * @param string $xmlRequest
     * @return \StructType\InputXMLType
     */
    public function setXmlRequest($xmlRequest = null)
    {
        // validation for constraint: string
        if (!is_null($xmlRequest) && !is_string($xmlRequest)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($xmlRequest, true), gettype($xmlRequest)), __LINE__);
        }
        $this->xmlRequest = $xmlRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\InputXMLType
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
