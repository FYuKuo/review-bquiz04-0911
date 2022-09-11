<h1 class="ct">商品分類</h1>
<div class="ct">
    新增大分類<input type="text" name="big" id="big"><input type="button" value="新增" onclick="add_type('big')">
</div>
<div class="ct">
    新增中分類
    <select name="bigType" id="bigType"></select>
    <input type="text" name="mid" id="mid"><input type="button" value="新增" onclick="add_type('mid')">
</div>
<table class="w-100  ct">

<?php
$bigs = $Type->all(['parent'=>0]);
foreach ($bigs as $key => $big) {
?>
<tr class="tt">
    <td class="w-60" style="text-align: left;"><?=$big['name']?></td>
    <td>
        <input type="button" value="修改" onclick="edit_type(<?=$big['id']?>)">
        <input type="button" value="刪除" onclick="del(<?=$big['id']?>,'type')">
    </td>
</tr>
<?php
$mids = $Type->all(['parent'=>$big['id']]);
foreach ($mids as $key => $mid) {
?>
<tr class="pp">
    <td class="w-60"><?=$mid['name']?></td>
    <td>
        <input type="button" value="修改" onclick="edit_type(<?=$mid['id']?>)">
        <input type="button" value="刪除" onclick="del(<?=$mid['id']?>,'type')">
    </td>
</tr>
<?php
}
}
?>
</table>
<h1 class="ct">商品管理</h1>
<div class="ct">
    <input type="button" value="新增商品" onclick="to('?do=add_goods')">
</div>
<div class="ct">
    <select name="" id="">
        <option value="">全部商品</option>
    </select>
</div>

<table class="w-100 ct">
<tr class="tt">
    <th class="w-20">編號</th>
    <th class="w-20">商品名稱</th>
    <th class="w-20">庫存量</th>
    <th class="w-20">狀態</th>
    <th class="w-20">操作</th>
</tr>

<?php
$goods = $Goods->all();
foreach ($goods as $key => $good) {
?>
<tr class="pp">
    <td><?=$good['no']?></td>
    <td><?=$good['name']?></td>
    <td><?=$good['qt']?></td>
    <td>
        <?=($good['sh'] == 1)?"販售中":"已下架"?>
    </td>
    <td>
        <input type="button" value="修改" onclick="to('?do=edit_goods&id=<?=$good['id']?>')">
        <input type="button" value="刪除" onclick="del(<?=$good['id']?>,'goods')">
        <input type="button" value="上架" onclick="sh(<?=$good['id']?>,1,'goods')">
        <input type="button" value="下架" onclick="sh(<?=$good['id']?>,0,'goods')">
    </td>
</tr>
<?php
}
?>
</table>
