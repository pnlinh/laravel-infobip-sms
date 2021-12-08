<?php

/**
 * This is config for Infobip SMS.
 *
 * @see https://dev.infobip.com/send-sms/single-sms-message
 */
return [
    'from'     => env('INFOBIP_FROM', 'Laravel'),
    'apiKey'   => env('INFOBIP_APIKEY', '')
];
