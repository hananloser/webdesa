<?php

namespace App\Console\Commands;

use Telegram\Bot\Commands\Command;
use Telegram ;

class StartCommand extends Command
{
    /**
     * @var string Command Name
     */
    protected $name = 'help';

    /**
     * @var array Command Aliases
     */
    protected $aliases = ['listcommands'];

    /**
     * @var string Command Description
     */
    protected $description = 'Help command, Get a list of all commands';

    /**
     * {@inheritdoc}
     */
    public function handle($arguments)
    {
        $text = 'Hello, thanks for visiting me.' . chr(10) . chr(10);
        $text .= 'I am the help command' . chr(10);

        $this->replyWithMessage(compact('text'));
    }
}
