<?php

$pagina = file_get_contents('http://google.com');

$pagina = str_replace('Gmail', 'Outlook', $pagina);

echo $pagina;
