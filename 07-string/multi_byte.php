<?php

$multi = 'batata';
var_dump(strlen($multi));

$multi = 'batçãá';
var_dump(strlen($multi));
var_dump(mb_strlen($multi));
