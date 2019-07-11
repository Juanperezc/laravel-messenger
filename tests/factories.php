<?php

$faktory->define(['thread', 'Juan\Messenger\Models\Thread'], function ($f) {
    $f->subject = 'Sample thread';
});

$faktory->define(['message', 'Juan\Messenger\Models\Message'], function ($f) {
    $f->user_id = 1;
    $f->thread_id = 1;
    $f->body = 'A message';
});

$faktory->define(['participant', 'Juan\Messenger\Models\Participant'], function ($f) {
    $f->user_id = 1;
    $f->thread_id = 1;
});
