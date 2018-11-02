<?php

use Pnlinh\InfobipSms\Facades\InfobipSms;

if (!function_exists('infobip_sms_send')) {
    /**
     * @param array $to
     * @param $text
     *
     * @return mixed
     */
    function infobip_sms_send(array $to, $text)
    {
        return InfobipSms::send($to, $text);
    }
}
