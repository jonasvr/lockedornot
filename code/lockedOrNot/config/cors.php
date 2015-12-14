<?php

return [
    /*
     |--------------------------------------------------------------------------
     | Laravel CORS
     |--------------------------------------------------------------------------
     |

     | allowedOrigins, allowedHeaders and allowedMethods can be set to array('*') 
     | to accept any value, the allowed methods however have to be explicitly listed.
     |
     */
    'supportsCredentials' => false,
    'allowedOrigins' => ['*'],
    'allowedHeaders' => ['*'],
    'allowedMethods' => ['GET', 'POST', 'PUT',  'DELETE'],
    'exposedHeaders' => [],
    'maxAge' => 0,
    'hosts' => [],

    'defaults' => array(
        'supportsCredentials' => false,
        'allowedOrigins' => array(),
        'allowedHeaders' => array(),
        'allowedMethods' => array(),
        'exposedHeaders' => array(),
        'maxAge' => 0,
        'hosts' => array(),
    ),

    'paths' => array(
        '*' => array(
            'allowedOrigins' => array('*'),
            'allowedHeaders' => array('Content-Type', 'Authorization', 'Accept'),
            'allowedMethods' => array('POST', 'PUT', 'GET', 'DELETE')
        ),
    ),
];





//return [
//    'defaults' => [
//        'supportsCredentials' => false,
//        'allowedOrigins' => [],
//        'allowedHeaders' => [],
//        'allowedMethods' => [],
//        'exposedHeaders' => [],
//        'maxAge' => 0,
//        'hosts' => [],
//    ],
//
//    'paths' => [
//        'v1/*' => [
//            'allowedOrigins' => ['*'],
//            'allowedHeaders' => ['*'],
//            'allowedMethods' => ['*'],
//            'maxAge' => 3600,
//        ],
//    ],
//];