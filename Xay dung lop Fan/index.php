<?php
include_once "Fan.php";
$fan1 = new Fan(3, 10, "yellow", true);
$fan2 = new Fan(1, 5, "blue", false);
echo ($fan1->toString()."<br>");
echo($fan2->toString());
?>