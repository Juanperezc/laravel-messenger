<?php

namespace Juan\Messenger\Test\Stubs\Models;

use Juan\Messenger\Models\Message;

class CustomMessage extends Message
{
    protected $table = 'custom_messages';
}
