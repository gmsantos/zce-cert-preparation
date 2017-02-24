<?php

define('TOKEN', '123'); // valor temporal

if ($_POST['token'] === TOKEN) {
    var_dump($_POST);
}

?>
<form action="csrf.php" method="POST">
    <input type="text" value="teste" name="teste">
    <input type="hidden" name="token" value="<?=TOKEN?>">

    <input type="submit">
</form>
