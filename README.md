Central settlement system Soap class

# Installation
``` composer require crystoline/css``` 
# Instructions
In addition, the goal is to show which methods are available and the fist needed parameter(s)

    You have to use an associative array such as:
	- the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
	- the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
```php
<?php
$options = array(
\WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://css.ng/v1prod/wsdl',
\WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
\WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
\WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
);
//etc....
```
## Setting Soap Options
```php
<?php
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://css.ng/v1prod/wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
);
```

## For Upload ServiceType

```php
$upload = new \ServiceType\Upload($options);
```

### Call for uploadPaymentSchedule operation/method


```php
if ($upload->uploadPaymentSchedule($uploadPaymentSchedule) !== false) {
    print_r($upload->getResult());
} else {
    print_r($upload->getLastError());
}
```

### Call for uploadNewVendors operation/method

```php
if ($upload->uploadNewVendors($uploadNewVendors) !== false) {
    print_r($upload->getResult());
} else {
    print_r($upload->getLastError());
}
```

## For Get ServiceType

```php
$get = new \ServiceType\Get($options);
```
### Call for getPaymentScheduleStatus operation/method

```php
if ($get->getPaymentScheduleStatus($getPaymentScheduleStatus) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
```

### Call for getNewVendorsStatus operation/method

```php
if ($get->getNewVendorsStatus($getNewVendorsStatus) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
```
