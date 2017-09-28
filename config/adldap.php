<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Connections
    |--------------------------------------------------------------------------
    |
    | This array stores the connections that are added to Adldap. You can add
    | as many connections as you like.
    |
    | The key is the name of the connection you wish to use and the value is
    | an array of configuration settings.
    |
    */

    'connections' => [

        'default' => [

            'auto_connect' => true,

            /*
            |--------------------------------------------------------------------------
            | Connection
            |--------------------------------------------------------------------------
            |
            | The connection class to use to run raw LDAP operations on.
            |
            | Custom connection classes must implement:
            |  \Adldap\Connections\ConnectionInterface
            |
            */

            'connection' => Adldap\Connections\Ldap::class,

            'schema' => Adldap\Schemas\ActiveDirectory::class,


            'connection_settings' => [

                'account_prefix' => env('ADLDAP_ACCOUNT_PREFIX', ''),

                'account_suffix' => env('ADLDAP_ACCOUNT_SUFFIX', ''),

                'domain_controllers' => explode(' ', env('ADLDAP_CONTROLLERS', 'aldeassos.local')),

                'port' => env('ADLDAP_PORT', 389),

                'timeout' => env('ADLDAP_TIMEOUT', 5),

                'base_dn' => env('ADLDAP_BASEDN', 'dc=aldeassos,dc=local'),

                'admin_account_suffix' => env('ADLDAP_ADMIN_ACCOUNT_SUFFIX', ''),

                /*
                |--------------------------------------------------------------------------
                | Administrator Username & Password
                |--------------------------------------------------------------------------
                |
                | When connecting to your AD server, a username and password is required
                | to be able to query and run operations on your server(s). You can
                | use any user account that has these permissions. This account
                | does not need to be a domain administrator unless you
                | require changing and resetting user passwords.
                |
                */

                'admin_username' => env('ADLDAP_ADMIN_USERNAME', 'username'),
                'admin_password' => env('ADLDAP_ADMIN_PASSWORD', 'password'),

                /*
                |--------------------------------------------------------------------------
                | Follow Referrals
                |--------------------------------------------------------------------------
                |
                | The follow referrals option is a boolean to tell active directory
                | to follow a referral to another server on your network if the
                | server queried knows the information your asking for exists,
                | but does not yet contain a copy of it locally.
                |
                | This option is defaulted to false.
                |
                */

                'follow_referrals' => false,

                /*
                |--------------------------------------------------------------------------
                | SSL & TLS
                |--------------------------------------------------------------------------
                |
                | If you need to be able to change user passwords on your server, then an
                | SSL or TLS connection is required. All other operations are allowed
                | on unsecured protocols.
                | 
                | One of these options are definitely recommended if you 
                | have the ability to connect to your server securely.
                |
                */

                'use_ssl' => false,
                'use_tls' => false,

            ],

        ],

    ],

];
