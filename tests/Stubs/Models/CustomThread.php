<?php

namespace Juan\Messenger\Test\Stubs\Models;

use Juan\Messenger\Models\Thread;

class CustomThread extends Thread
{
    protected $table = 'custom_threads';
}
