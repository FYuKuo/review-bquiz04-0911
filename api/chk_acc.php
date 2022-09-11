<?php
include('./base.php');
$user = $Mem->find(['acc'=>$_GET['acc']]);

if(!empty($user) || $_GET['acc'] == 'admin'){
    echo "帳號已被註冊，請選擇其他帳號";

}else{
    
    echo "帳號可使用";
}

?>