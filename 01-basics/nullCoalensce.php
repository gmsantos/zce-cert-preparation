<?php

//echo isset($_GET['nome']) ? $_GET['nome'] : 'teste';

// PHP 7
echo $_GET['nome'] ?? 'teste';

 $_GET['sobrenome'] = 'Vagrant';

echo $_GET['nome'] ?? $_GET['sobrenome'] ?? 'Indigente';
