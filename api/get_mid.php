<?php
include('./base.php');
$mids = $Type->all(['parent'=>$_GET['big']]);
foreach ($mids as $key => $mid) {
    echo "<option value='{$mid['id']}'>{$mid['name']}</option>";
}
?>