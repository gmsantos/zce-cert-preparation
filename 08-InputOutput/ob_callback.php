<?php

function callback($buffer)
{
  // substitui apples por oranges
  return (str_replace("apples", "oranges", $buffer));
}

function upper($buffer)
{
  // substitui apples por oranges
  return strtoupper($buffer);
}

ob_start("callback");

?>
<html>
<body>
<p>It's like comparing apples to oranges.</p>
</body>
</html>
<?php

ob_end_flush();

echo 123;

$a = ob_get_clean();

?>
