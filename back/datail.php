<?php
$ord = $Ord->find(['no'=>$_GET['no']]);
?>

<h1 class="ct">訂單編號 <span class="red"><?=$ord['no']?></span> 的詳細資料</h1>


<tabel class="myTable">
    <tr>
        <th class="w-30 tt">會員帳號</th>
        <td class="pp"><?=$ord['acc']?></td>
    </tr>
    <tr>
        <th class="w-30 tt">會員帳號</th>
        <td class="pp"><?=$ord['name']?></td>
    </tr>
    <tr>
        <th class="w-30 tt">會員帳號</th>
        <td class="pp"><?=$ord['email']?></td>
    </tr>
    <tr>
        <th class="w-30 tt">會員帳號</th>
        <td class="pp"><?=$ord['addr']?></td>
    </tr>
    <tr>
        <th class="w-30 tt">會員帳號</th>
        <td class="pp"><?=$ord['tel']?></td>
    </tr>
</tabel>

<tabel class="myTable ct">
    <tr class=" tt">
        <th class="w-30">商品名稱</th>
        <th>編號</th>
        <th>數量</th>
        <th>單價</th>
        <th>小計</th>
        
    </tr>
    <tr class="tt">
        <td colspan="5">
            總價：
        </td>
    </tr>
</tabel>
