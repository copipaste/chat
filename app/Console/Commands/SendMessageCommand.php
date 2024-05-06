<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Events\MessageSent;
use function Laravel\Prompts\text;

class SendMessageCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:message';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a message to the chat.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = text(
            label: 'Name',
            required: true
        );

        $text = text(
            label: 'what is your message?',
            required: true
        );



        MessageSent::dispatch($name, $text);

    }
}
