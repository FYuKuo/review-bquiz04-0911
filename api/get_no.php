<?php
include('./base.php');
$no = str_pad($_GET['big'],2,0,STR_PAD_LEFT).str_pad($_GET['mid'],2,0,STR_PAD_LEFT).$Goods->math('MAX','id')+10;

echo $no;
echo "<input type='hidden' name='no' value='$no'>";
?>