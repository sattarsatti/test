<?php

return [
    'service' => 'Recaptcha', // options: Recaptcha / Hcaptcha
    'sitekey' => env('RECAPTCHA_V2_SITE_KEY', ''),
    'secret' => env('RECAPTCHA_V2_SECRET_KEY', ''),
    'forms' =>'all',
    'user_login' => false,
    'user_registration' => false,
    'disclaimer' => '',
    'invisible' => false,
    'hide_badge' => false,
    'enable_api_routes' => false,
];
?>