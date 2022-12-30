<?php

namespace App\Console\Commands;

use App\Lib\RabbitMQClient\RabbitMQClient;
use Illuminate\Console\Command;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Exchange\AMQPExchangeType;
use PhpAmqpLib\Message\AMQPMessage;

class EmitLogDirect extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'emit_rabbit_log:direct {severity} {message}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Emits rabbitmq messages to the direct exchange';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $data = $this->argument('message');
        
        $severity = $this->argument('severity');
        
        $rabbitMQClient = new RabbitMQClient($data);

        $rabbitMQClient->channel->exchange_declare('direct_logs', AMQPExchangeType::DIRECT, false, false, false);

        $rabbitMQClient->channel->basic_publish($rabbitMQClient->AMQPMessage, 'direct_logs', $severity);

        echo ' [x] Sent ', $severity, ':', $data, "\n";
    }
}
