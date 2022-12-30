<?php

return [
    'connect_to' => 'default',

    'connections' => [
        'default' => [
            'host' => env('RABBITMQ_HOST'),
            'port' => env('RABBITMQ_PORT'),
            'user' => env('RABBITMQ_USER'),
            'password' => env('RABBITMQ_PASSWORD'),
            'vhost' => env('RABBITMQ_VHOST'),

            'ssl' => [
                'enable' => env('RABBITMQ_SSL_ENABLE', false),
                'cafile' => env('RABBITMQ_SSL_CAFILE', null),
                'verify_peer' => env('RABBITMQ_SSL_VERIFY_PEER', false),
            ],
        ]
    ],

    // 'b2b_subscription' => [
    //     'exchange' => [
    //         'type' => \App\Lib\Queue\Contracts\ExchangeType::TOPIC,
    //         'name' => env('RABBITMQ_B2B_SUBSCRIPTION_EXCHANGE', 'b2b-patient-status'),
    //     ],
    //     'queue' => [
    //         'type' => \App\Lib\Queue\Contracts\QueueType::CLASSIC,
    //         'name' => env('RABBITMQ_B2B_SUBSCRIPTION_QUEUE', 'b2b-subscriptions'),
    //         'naming' => [
    //             'prefix' => 'Q'
    //         ]
    //     ],
    //     'consumer_tag' => env('RABBITMQ_B2B_SUBSCRIPTION_CONSUMER_TAG'),
    //     'routing_key' => env('RABBITMQ_B2B_SUBSCRIBED_ROUTING_KEY'),
    // ],

    // 'message_type' => [
    //     'b2b_subscription' => env('RABBITMQ_MESSAGE_TYPE_B2B_SUBSCRIPTION', 'b2b-subscription'),
    // ],

    // 'patient' => [
    //     'queues' => [
    //         'activate' => env('RABBITMQ_QUEUE_PATIENT_ACTIVATE', 'patient-activate'),
    //         'activated' => env('RABBITMQ_QUEUE_PATIENT_ACTIVATED', 'patient-activated'),
            
    //         'renew' => env('RABBITMQ_QUEUE_PATIENT_RENEW', 'patient-renew'),
    //         'renewed' => env('RABBITMQ_QUEUE_PATIENT_RENEWED', 'patient-renewed'),
            
    //         'change' => env('RABBITMQ_QUEUE_PATIENT_CHANGE', 'patient-change'),
    //         'change_error' => env('RABBITMQ_QUEUE_PATIENT_CHANGE_ERROR', 'patient-change-error'),
    //         'changed' => env('RABBITMQ_QUEUE_PATIENT_CHANGED', 'patient-changed'),
    //     ],
    //     'routing_keys' => [
    //         'activate' => env('RABBITMQ_ROUTING_KEY_PATIENT_ACTIVATE', 'activate'),
    //         'activated' => env('RABBITMQ_ROUTING_KEY_PATIENT_ACTIVATED', 'activated'),
            
    //         'renew' => env('RABBITMQ_ROUTING_KEY_PATIENT_RENEW', 'renew'),
    //         'renewed' => env('RABBITMQ_ROUTING_KEY_PATIENT_RENEWED', 'renewed'),
            
    //         'change' => env('RABBITMQ_ROUTING_KEY_PATIENT_CHANGE', 'change'),
    //         'change_error' => env('RABBITMQ_ROUTING_KEY_PATIENT_CHANGE_ERROR', 'change-error'),
    //         'changed' => env('RABBITMQ_ROUTING_KEY_PATIENT_CHANGED', 'changed'),
    //     ],
    //     'exchange' =>  env('RABBITMQ_B2B_ACTIVATION_EXCHANGE', 'b2b-patient-status'),
    // ],
];
