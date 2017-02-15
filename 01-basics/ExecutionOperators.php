<?php

/**
 * Backticks ` executes OS commands
 * Is affected by ini disable_functions = shell_exec
 */

$var = `dir c:\\`;

echo $var;
