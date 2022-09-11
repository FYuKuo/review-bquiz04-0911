<?php
include('./base.php');
$_POST['no'] = date("YmdHis");
$_POST['goods'] = serialize($_SESSION['cart']);
$_POST['orddate'] = $today;
$Ord->save($_POST);
unset($_SESSION['cart']);
?>