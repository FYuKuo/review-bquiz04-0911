<?php
if(isset($_GET['id'])){

    $_SESSION['cart'][$_GET['id']] = $_GET['qt'];
}

if(!isset($_SESSION['mem'])){
    to('?do=login');
}


?>

<h1 class="ct"><?=$_SESSION['mem']?>的購物車</h1>

<?php
if(!empty($_SESSION['cart'])){
?>
<table class="myTable ct">
    <tr class="tt">
        <th>編號</th>
        <th>商品名稱</th>
        <th>數量</th>
        <th>庫存量</th>
        <th>單價</th>
        <th>小計</th>
        <th>刪除</th>
    </tr>

    <?php
    foreach ($_SESSION['cart'] as $id => $qt) {
        $good = $Goods->find($id);
    ?>
    <tr class="pp">
        <td><?=$good['no']?></td>
        <td><?=$good['name']?></td>
        <td><?=$qt?></td>
        <td><?=$good['qt']?></td>
        <td><?=$good['price']?></td>
        <td><?=$good['price']*$qt?></td>
        <td>
            <img src="./icon/0415.jpg" alt="" onclick="del_cart(<?=$id?>)">
        </td>

    </tr>
    <?php
    }
    ?>
</table>    
<div class="ct my-10">
    <a href="./index.php"><img src="./icon/0411.jpg" alt=""></a>&nbsp;&nbsp;<a href="?do=checkout"><img src="./icon/0412.jpg" alt=""></a>
</div>

<?php
}else{
    echo "<h2 class='ct'>購物車中尚未有商品</h2>";
}
?>

<script>
    function del_cart(id){
        $.post('./api/del_cart.php',{id},()=>{
            to('?do=buycart');
        })
    }
</script>