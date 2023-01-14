<?php 
require_once('../../config.php');
//var_dump($_SERVER['PHP_SELF'])
    $conn->query("DELETE FROM `appointments` where id = '{$_REQUEST['id']}'");
?>