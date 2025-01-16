<?php

define('RBSPAYMENT_ALFABANK_PAYMENT_NAME', 'Alfa Bank');

define('RBSPAYMENT_ALFABANK_PROD_URL' , 'https://pay.alfabank.ru/payment/rest/');
define('RBSPAYMENT_ALFABANK_TEST_URL' , 'https://alfa.rbsuat.com/payment/rest/');
define('RBSPAYMENT_ALFABANK_PROD_URL_ALTERNATIVE_DOMAIN' , 'https://payment.alfabank.ru/');
define('RBSPAYMENT_ALFABANK_PROD_URL_ALT_PREFIX' , 'r-');

define('RBSPAYMENT_ALFABANK_ENABLE_LOGGING', true);
define('RBSPAYMENT_ALFABANK_ENABLE_CART_OPTIONS', true);

define('RBSPAYMENT_ALFABANK_MEASUREMENT_NAME', 'шт'); //FFD v1.05
define('RBSPAYMENT_ALFABANK_MEASUREMENT_CODE', 0); //FFD v1.2

define('RBSPAYMENT_ALFABANK_SKIP_CONFIRMATION_STEP', true);
define('RBSPAYMENT_ALFABANK_CUSTOMER_EMAIL_SEND', true); //PLUG-4667
define('RBSPAYMENT_ALFABANK_ENABLE_CALLBACK', true);

define('RBSPAYMENT_ALFABANK_CURRENCY_CODES', serialize(array(
    'USD' => '840',
    'UAH' => '980',
    'RUR' => '810',
    'RON' => '946',
    'KZT' => '398',
    'KGS' => '417',
    'JPY' => '392',
    'GBR' => '826',
    'EUR' => '978',
    'CNY' => '156',
    'BYR' => '974',
    'BYN' => '933'
)));