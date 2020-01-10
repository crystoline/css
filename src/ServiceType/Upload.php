<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Upload ServiceType
 * @subpackage Services
 */
class Upload extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named uploadPaymentSchedule
     * Meta information extracted from the WSDL
     * - documentation: Upload payment schedule
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param uploadPaymentSchedule $uploadPaymentSchedule
     * @return string|bool
     */
    public function uploadPaymentSchedule($uploadPaymentSchedule)
    {
        try {
            $this->setResult($this->getSoapClient()->uploadPaymentSchedule($uploadPaymentSchedule));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named uploadNewVendors
     * Meta information extracted from the WSDL
     * - documentation: Upload new vendors.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param uploadNewVendors $uploadNewVendors
     * @return string|bool
     */
    public function uploadNewVendors($uploadNewVendors)
    {
        try {
            $this->setResult($this->getSoapClient()->uploadNewVendors($uploadNewVendors));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return string
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
