<?php
$config = [

  /**
   * The overall website
   * settings for your
   * project.
   */

  'site' => [
      'title' => 'Vesper-PHP',
      'description' => 'The ultimate rag tag PHP framework.',
      'uri' => 'http://localhost:8888/Vesper-PHP/httpdocs'
    ],

  /** 
   * Production or Live?
   * true : live
   * false : dev/prod
   */

  'production' => false, 

  /**
   * The url to redirect some
   * of the errors to.
   */

  'errordirect' => 'error/500/', // Location to redirect errors to.
  
  /**
   * MySQL settings.
   * (for Sequel)
   */

  'mysql' => [ 
    'host' => '127.0.0.1',
    'db' => 'test',
    'user' => 'root',
    'pass' => 'root',
    'port' => '8889'
    ],

  /**
   * Sequel settings.
   */

  'sequel' => [
    'paginate' => 10,      // Items per loop
    'limit' =>  25,        // standard limit (when applied)
    'debug' => false,      // Show the instance internals
  ],
  
  /**
   * SMTP settings.
   * (for PHP mailer)
   */

  'smtp' => [
    'host' => 'smtp.mailtrap.io',
    'user' => '',
    'pass' => '',
    'port' => '2525',
    'encrypt' => 'STARTTLS'
  ],

  /**
   * Template engine settings.
   * (for Frontier)
   */

  'frontier' => [
    'cache' => 'httpdocs/cache/',
    'views' => 'views/', 

    /**
     * These are the namespaces
     * that are placed on top of
     * every cached template so the
     * classes can be used.
     */

    'namespaces' => [ 
      'Elemental\Config',
      'Elemental\Re',
      'Frontier\Glob',
      'Frontier\Flash',
      'Frontier\Hook',
      'Sequel\Paginate'
    ],
    
    /**
     * Flash message settings.
     */

    'flash' => [
      'template' => 'views/parts/flash.html' // the template file for a flash message
    ]
  ],

  /**
   * Security settings.
   * (for Vault)
   */

  'vault' => [
    'salt' => '47f!hX4AB6H31l~rIQHH3ESyu$R6A6iCMk2XXSfEBOX7dMw4E%g9Ekes5Uxz',
  ],

  /**
   * Logger settings.
   * Toggle on/of what you'd
   * like to log. Mostly for
   * debugging but some
   * of them can be useful 
   * on a live site.
   */

  'logger' => [

    /**
     * Set the location where 
     * to save the log files.
     */

    'store' => 'store/logs',

    /**
     * What should we log?
     */
    
    'phperror' => true,    // log php errors
    'frontier' => true,    // log caching and errors
    'flash' => true,       // log flash messages
    'sequel' => true,      // log SQL queries
    'shield' => false,     // log shield bounces and errors
    'speed' => false,      // log php loading speed
    'visits' => false,     // log visits. Warning, this has to reflect in your cookie notice
    //'sendry' => false,   // log sendry errors
    //'sent' => false,     // log sent emails
  ]
  
];

/**
 * Done!
 */

define("V_CONFIG", $config);
