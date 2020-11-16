<?php

$db_user = 's145665';
$db_password = 'NFjXI3BHZ70t';
$db_name = 's145665';
try{
    $pdo = new PDO( 'mysql:host=localhost;dbname='.$db_name,$db_user,$db_password );
}
catch(PDOException $exception){
}
?>