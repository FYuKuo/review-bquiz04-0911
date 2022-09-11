<?php
include('./base.php');
if(isset($_FILES['img']['tmp_name']) && $_FILES['img']['error'] == 0){
    move_uploaded_file($_FILES['img']['tmp_name'],'../img/'.$_FILES['img']['name']);
    $_POST['img'] = $_FILES['img']['name'];
}
$Goods->save($_POST);
to('../back.php?do=th');
?>