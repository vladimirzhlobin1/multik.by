<?php
$db_host = "by119.atservers.net";
$db_user = "user2090322";
$db_pass = "Lizaveta1718";
$db_database = "user2090322_wpshop";


$link = mysqli_connect($db_host,$db_user,$db_pass);


mysqli_select_db($link,$db_database) or die("Нет соединения с базой данных". mysqli_error());
mysqli_set_charset($link, "utf8");


?>


