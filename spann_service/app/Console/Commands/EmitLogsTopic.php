<?php

namespace App\Console\Commands;

use App\Lib\RabbitMQClient\RabbitMQClient;
use Illuminate\Console\Command;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Exchange\AMQPExchangeType;
use PhpAmqpLib\Message\AMQPMessage;

class EmitLogsTopic extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rabbit_emit_logs:topic {topic} {message}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Emits logs to rabbitmq topic exchange';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $data = $this->argument('message');
        
        $rabbitMQClient = new RabbitMQClient($data);

        $rabbitMQClient->channel->exchange_declare('topic_logs', AMQPExchangeType::TOPIC, false, false, false);

        $routing_key = $this->argument('topic');

        $rabbitMQClient->channel->basic_publish($rabbitMQClient->AMQPMessage, 'topic_logs', $routing_key);

        echo ' [x] Sent ', $routing_key, ':', $data, "\n";
    }
}
