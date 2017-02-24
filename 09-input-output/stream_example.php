<?php
/*
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
];*/

//$context = stream_context_create($opts);

chdir(__DIR__);

$stream = fopen('teste/index.php', 'r');

stream_filter_append($stream, 'string.tolower', STREAM_FILTER_READ);

echo fgets($stream);
