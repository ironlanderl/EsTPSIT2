<?php

$mesi = '{"gennaio":1, "febbraio":2, "marzio":3, "aprile":4}';
var_dump(json_decode($mesi, true));
echo "<br>";
var_dump(json_decode($mesi, false));


echo "<br><br><br>";

$mese = json_decode($mesi, false);

echo $mese->aprile;
echo "<br>";
echo $mese["aprile"];
?>