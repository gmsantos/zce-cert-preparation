<?php declare(strict_types=1);

// First declaraion
namespace Teste;

require_once 'iterator';

use Symfony\Component\HttpFoundation\Session\Storage\Handler\PdoSessionHandler as PdoSeHand;

// PHP 7.1
use Symfony\Component\HttpFoundation\{ 
	Session\Storage\Handler\PdoSessionHandler,
	Session\Storage\Handler\NullSessionHandler
};