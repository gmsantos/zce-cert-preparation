<?php

$postdata = [
  'var2' => 'value1',
  'var1' => ['teste'],
];

$opts = ['http' =>
  [
    'method'  => 'POST',
    'header'  => 'Content-type: application/x-www-form-urlencoded',
    'content' => http_build_query($postdata, '', '&'),
    'timeout' => 5,
  ]
];

$context = stream_context_create($opts);

echo file_get_contents("http://localhost:8000/", 0, $context);
