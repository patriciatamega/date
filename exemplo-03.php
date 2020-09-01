<?php

$ts = strtotime("1969-07-14");
/*$ts = strtotime("1969-07-14"); Esta função também aceita expressões.
Exemplo1: $ts = strtotime("now");
Exemplo2: $ts = strtotime("+1 day");
Exemplo3: $ts = strtotime("+1 week"); */

echo date("l, d/m/Y", $ts);

?>