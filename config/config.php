<?php

return [

    // 'user_model' => App\Models\User::class,

    'message_model' => Juan\Messenger\Models\Message::class,

    'participant_model' => Juan\Messenger\Models\Participant::class,

    'thread_model' => Juan\Messenger\Models\Thread::class,

    /**
     * Define custom database table names - without prefixes.
     */
    'messages_table' => null,

    'participants_table' => null,

    'threads_table' => null,
];
