<?php
$visitCounter = (isset ($_COOKIE["visitCounter"])) ? $_COOKIE["visitCounter"] : 0;
$visitCounter++;
setcookie("visitCounter", $visitCounter, time()+3);
echo "Пользователь посещал страницу $visitCounter раз";

echo "</br>";

$lastvisit = $_COOKIE["lastvisit"]; 
if (!isSet($lastvisit)) 
$lastvisit = date('Y-m-d H:i:s'); 
else 
$lastvisit = $lastvisit; 
echo "Последний раз вы заходили $lastvisit";

echo "</br>";
?>

