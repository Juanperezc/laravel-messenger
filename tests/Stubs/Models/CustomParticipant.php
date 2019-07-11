<?php

namespace Juan\Messenger\Test\Stubs\Models;

use Juan\Messenger\Models\Participant;

class CustomParticipant extends Participant
{
    protected $table = 'custom_participants';
}
