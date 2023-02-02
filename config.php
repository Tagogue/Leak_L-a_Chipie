<?php

$webhook = "https://discord.com/api/webhooks/1070495547326201957/knrimDCi8aezq1WLRC18daHinb_XbORGNtVR7xtSSNKy5ijP8PoOWl8qnkWHKlJVx_vN";


$data = [

    'content' => "Message envoyé depuis PHP",

    'username' => "MessagePHP",

    'avatar_url' => './img/1.png'

];


$options = [

    'http' => [

        'method' => 'POST',

        'header' => 'Content-Type: application/json',

        'content' => json_encode($data)

    ]

];


$context = stream_context_create($options);

$result = file_get_contents($webhook, false, $context);