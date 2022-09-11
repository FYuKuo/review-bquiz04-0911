<?php
$ord = $Ord->find(['no'=>$_GET['no']]);
$ord['goods'] = unserialize($ord['goods']);
?>

<h1 class="ct">訂單編號 <span class="red"><?=$ord['no']?></span> 的詳細資料</h1>


<table class="myTable">
    <tr>
        <th class="w-30 tt">登入帳號</th>
        <td class="pp"><?=$ord['acc']?></td>
    </tr>
    <tr>
        <th class="w-30 tt">姓名</th>
        <td class="pp"><?=$ord['name']?></td>
    </tr>
    <tr>
        <th class="w-30 tt">電子信箱</th>
        <td class="pp"><?=$ord['email']?></td>
    </tr>
    <tr>
        <th class="w-30 tt">聯絡地址</th>
        <td class="pp"><?=$ord['addr']?></td>
    </tr>
    <tr>
        <th class="w-30 tt">連絡電話</th>
        <td class="pp"><?=$ord['tel']?></td>
    </tr>
</table>

<table class="myTable ct">
    <tr class=" tt">
        <th class="w-30">商品名稱</th>
        <th>編號</th>
        <th>數量</th>
        <th>單價</th>
        <th>小計</th>
        
    </tr>
    <?php
        $sum = 0;
        foreach ($ord['goods'] as $id => $qt) {
            $good = $Goods->find($id);
            $sum += $good['price']*$qt;
        ?>
        <tr class="pp">
            <td><?=$good['name']?></td>
            <td><?=$good['no']?></td>
            <td><?=$qt?></td>
            <td><?=$good['price']?></td>
            <td><?=$good['price']*$qt?></td>

        </tr>
        <?php
        }
        ?>
    <tr class="tt">
        <td colspan="5">
            總價：<?=$sum?>
        </td>
    </tr>
</table>
<div class="ct"><input type="button" value="返回" onclick="to('?do=order')"></div>
