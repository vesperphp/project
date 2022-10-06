<?php

$config = [
  'site' => [
      'title' => 'Vesper-PHP',
      'description' => 'The ultimate rag tag PHP framework.',
      'uri' => 'http://localhost:8888/Vesper-PHP/httpdocs'
    ],

  'production' => false, // Production: true / Development: false
  'public' => 'httpdocs/', // Public folder directory
  'errordirect' => 'error/500/', // Location to redirect errors to.
  
  'mysql' => [ 
    'host' => '127.0.0.1',
    'db' => 'test',
    'user' => 'root',
    'pass' => 'root',
    'port' => '8889'
    ],
  
  'smtp' => [
    'host' => 'smtp.mailtrap.io',
    'user' => '',
    'pass' => '',
    'port' => '2525',
    'encrypt' => 'STARTTLS'
  ],

  'frontier' => [
    'cache' => 'httpdocs/cache/', // cached templates folder
    'views' => 'views/', // template view folder
    'namespaces' => [ // use namespace; on cached template
      'Elemental\Config',
      'Elemental\Re',
      'Frontier\Glob',
      'Frontier\Flash',
      'Frontier\Hook',
      'Sequel\Paginate'
    ],
    'flash' => [
      'template' => 'views/parts/flash.html' // the template file for a flash message
    ]
  ],

  'hash' => [
    'salt' => '47f!hX4AB6H31l~rIQHH3ESyu$R6A6iCMk2XXSfEBOX7dMw4E%g9Ekes5Uxz',
  ],

  'logger' => [
    'phperror' => true,    // log php errors
    'frontier' => true,    // log caching and errors
    'flash' => true,       // log flash messages
    'sequel' => true,      // log SQL queries
    'shield' => false,     // log shield bounces and errors
    'speed' => false,      // log php loading speed
    'visits' => false,     // log visits. Warning, this has to reflect in your cookie notice
    //'sendry' => false,   // log sendry errors
    //'sent' => false,     // log sent emails
  ],

  'sequel' => [
    'paginate' => 10,      // Items per loop
    'limit' =>  25,        // standard limit (when applied)
    'debug' => false,      // Show the instance internals
  ]

  
];

define("V_CONFIG", $config);
