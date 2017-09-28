<?php

return [


    'connection' => env('ADLDAP_CONNECTION', 'default'),

    'provider' => Adldap\Laravel\Auth\DatabaseUserProvider::class,

    'resolver' => Adldap\Laravel\Auth\Resolver::class,

    'importer' => Adldap\Laravel\Auth\Importer::class,

    'rules' => [

        // Denys deleted users from authenticating.

        Adldap\Laravel\Validation\Rules\DenyTrashed::class,

        // Allows only manually imported users to authenticate.

        // Adldap\Laravel\Validation\Rules\OnlyImported::class,

    ],

    'scopes' => [

        // Only allows users with a user principal name to authenticate.

        Adldap\Laravel\Scopes\UpnScope::class,

    ],

    'usernames' => [
        'ldap'=>'samaccountname',
        //'ldap' => ['discover' => 'samaccountname','authenticate' => 'samaccountname'],

        'eloquent' => 'username',
    ],

    'login_fallback' => env('ADLDAP_LOGIN_FALLBACK', false),

    'password_sync' => env('ADLDAP_PASSWORD_SYNC', true),
    
    'windows_auth_attribute' => ['samaccountname' => 'AUTH_USER'],

   // 'windows_auth_attribute' => ['discover' => 'samaccountname', 'key' => 'AUTH_USER'],
    
    'sync_attributes' => [
        'username' => 'samaccountname',
        'password' => 'userPassword',
        'name' => 'cn',

    ],

];
