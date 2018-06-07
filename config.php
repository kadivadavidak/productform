<?php

function config($key = '')
{
    $config = [
        'name' => 'Allmoxy Products',
        'template_path' => 'template',
        'content_path' => 'content',
        'pretty_uri' => true,
        'version' => 'v0.1',
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
