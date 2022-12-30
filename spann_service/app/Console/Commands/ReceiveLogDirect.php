<?php

namespace App\Console\Commands;

use App\Lib\RabbitMQClient\RabbitMQClient;
use Illuminate\Console\Command;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Exchange\AMQPExchangeType;

class ReceiveLogDirect extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'receive_rabbit_log:direct {severities}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Receives rabbitmq messages from direct exchange';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $rabbitMQClient = new RabbitMQClient();

        $rabbitMQClient->channel->exchange_declare('direct_logs', AMQPExchangeType::DIRECT, false, false, false);

        list($queue_name,,) = $rabbitMQClient->channel->queue_declare("", false, false, true, false);

        $severities = explode('.', $this->argument('severities'));

        foreach ($severities as $severity) {
            $rabbitMQClient->channel->queue_bind($queue_name, 'direct_logs', $severity);
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
