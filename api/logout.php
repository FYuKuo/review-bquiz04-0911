<?php
include('./base.php');
if(isset($_SESSION['cart']) && $_GET['table'] == 'mem'){
    unset($_SESSION['cart']);
}
unset($_SESSION[$_GET['table']]);
to('../index.php');
?>