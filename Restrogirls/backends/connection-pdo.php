<?php

include_once "config.php";

try {
    $pdoconn = new PDO("mysql:host=localhost:3307; dbname=$database", $user, $pwd, array( PDO::ATTR_PERSISTENT => true ));
    $pdoconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    //throw new Exception();
    echo $e;
}
?>

