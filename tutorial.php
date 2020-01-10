<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://css.ng/v1prod/wsdl',
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
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://css.ng/v1prod/wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
);
/**
 * Samples for Upload ServiceType
 */
$upload = new \ServiceType\Upload($options);
/**
 * Sample call for uploadPaymentSchedule operation/method
 */
if ($upload->uploadPaymentSchedule($uploadPaymentSchedule) !== false) {
    print_r($upload->getResult());
} else {
    print_r($upload->getLastError());
}
/**
 * Sample call for uploadNewVendors operation/method
 */
if ($upload->uploadNewVendors($uploadNewVendors) !== false) {
    print_r($upload->getResult());
} else {
    print_r($upload->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \ServiceType\Get($options);
/**
 * Sample call for getPaymentScheduleStatus operation/method
 */
if ($get->getPaymentScheduleStatus($getPaymentScheduleStatus) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getNewVendorsStatus operation/method
 */
if ($get->getNewVendorsStatus($getNewVendorsStatus) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
