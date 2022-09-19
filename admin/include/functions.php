<?php
function clear_string($cl_str){
    
$db_host = "by119.atservers.net";
$db_user = "user2090322";
$db_pass = "Lizaveta1718";
$db_database = "user2090322_wpshop";
$link = mysqli_connect($db_host,$db_user,$db_pass);  
$cl_str = htmlspecialchars ($cl_str);
$cl_str= mysqli_real_escape_string($link,$cl_str);
$cl_str = trim($cl_str);
return $cl_str;
}

?>