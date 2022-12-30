<?php

namespace App\Lib\RabbitMQClient;

use PhpAmqpLib\Connection\AMQPSSLConnection;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

class RabbitMQClient
{
    /** @var object */
    public $connection;

    /** @var object */
    public $channel;

    protected string $exchange;

    protected string $exchange_type;

    /** @var string */
    protected $routing_key;

    /** @var string */
    protected $queue;

    /** @var object */
    public $AMQPMessage;

    public function __construct($data = null)
    {
        $config = config('rabbitmq');
        $connections_config = $config['connections'][$config['connect_to']];

        $host = $connections_config['host'];
        $port = $connections_config['port'];
        $user = $connections_config['user'];
        $password = $connections_config['password'];
        $vhost = $connections_config['vhost'];

        $ssl_opts = [
            'verify_peer' => $connections_config['ssl']['verify_peer'],
            'cafile' => $connections_config['ssl']['cafile'],
        ];

        if (config('rabbitmq.connections')[config('rabbitmq.connect_to')]['ssl']['enable']) {
            $this->connection = new AMQPSSLConnection($host, $port, $user, $password, $vhost, $ssl_opts);
            $this->channel = $this->connection->channel();
        } else {
            $this->connection = new AMQPStreamConnection($host, $port, $user, $password);
            $this->channel = $this->connection->channel();
        }

        // $this->queue = config('rabbitmq.b2b_subscription.queue.name');
        // $this->exchange = config('rabbitmq.b2b_subscription.exchange.name');
        // $this->exchange_type = config('rabbitmq.b2b_subscription.exchange.type');

        // $this->routing_key = config('rabbitmq.b2b_subscription.routing_key');
        // $this->consumer_tag = config('rabbitmq.b2b_subscription.consumer_tag');


        /**
         * If RabbitMQClient object is created for publishing
         * message, then its property AMQPMessage can be initialized
         * in this constructor.
         */
        if(!is_null($data)) {
            $this->AMQPMessage = new AMQPMessage($data);
        }
    }

    public function __destruct()
    {
        $this->close();
    }

    public function close()
    {
        if (!is_null($this->channel)) {
            $this->channel->close();
            $this->channel = null;
        }

        if (!is_null($this->connection)) {
            $this->connection->close();
            $this->connection = null;
        }
    }
}
