<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named getPaymentScheduleStatus
     * Meta information extracted from the WSDL
     * - documentation: Get status of payment schedule
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param getPaymentScheduleStatus $getPaymentScheduleStatus
     * @return string|bool
     */
    public function getPaymentScheduleStatus($getPaymentScheduleStatus)
    {
        try {
            $this->setResult($this->getSoapClient()->getPaymentScheduleStatus($getPaymentScheduleStatus));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getNewVendorsStatus
     * Meta information extracted from the WSDL
     * - documentation: Get the status of vendor accounts uploaded with the uploadNewVendors method
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param getNewVendorsStatus $getNewVendorsStatus
     * @return string|bool
     */
    public function getNewVendorsStatus($getNewVendorsStatus)
    {
        try {
            $this->setResult($this->getSoapClient()->getNewVendorsStatus($getNewVendorsStatus));
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
