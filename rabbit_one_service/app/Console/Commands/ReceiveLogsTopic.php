<?php

namespace App\Console\Commands;

use App\Lib\RabbitMQClient\RabbitMQClient;
use Illuminate\Console\Command;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Exchange\AMQPExchangeType;

class ReceiveLogsTopic extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rabbit_receive_logs:topic {binding_keys*}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Receives messages from rabbit topic exchange';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $rabbitMQClient = new RabbitMQClient();

        $rabbitMQClient->channel->exchange_declare('topic_logs', AMQPExchangeType::TOPIC, false, false, false);

        list($queue_name,,) = $rabbitMQClient->channel->queue_declare("", false, false, true, false);

        foreach ($this->argument('binding_keys') as $binding_key) {
            $rabbitMQClient->channel->queue_bind($queue_name, 'topic_logs', $binding_key);
        }

        echo " [*] Waiting for logs. To exit press CTRL+C\n";

        $callback = function ($msg) {
            echo ' [x] ', $msg->delivery_info['routing_key'], ':', $msg->body, "\n";
        };

        $rabbitMQClient->channel->basic_consume($queue_name, '', false, true, false, false, $callback);

        while ($rabbitMQClient->channel->is_open()) {
            $rabbitMQClient->channel->wait();
        }
    }
}
