<?php

/**
 * Heredoc do var interpolation - Act like double quotes ""
 * Nowdoc doesn't var interpolation - Act like single quotes ''
 */

$url = 'https://www.youtube.com/watch?v=LH5ay10RTGY';

// Heredoc can omit ""
$heredocString = <<<IDENTIFIER
Hey, I'm a banana!!

$url

IDENTIFIER;

$nowdocString = <<<'IDENTIFIER'
Hey, I'm a banana!!

$url

// Ending must not use quotes
'IDENTIFIER';

    // Must be on line starting
    IDENTIFIER;

IDENTIFIER;

var_dump($heredocString);
var_dump($nowdocString);
