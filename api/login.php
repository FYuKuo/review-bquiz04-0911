<?php
include('./base.php');
$DB = new DB($_GET['table']);
$user = $DB->find(['acc'=>$_GET['acc'],'pw'=>$_GET['pw']]);
if(!empty($user)){
    $_SESSION[$_GET['table']] = $_GET['table'];
    echo 1;
}else{
    
    echo 0;
}

?>