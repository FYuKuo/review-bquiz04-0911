<?php
$mem = $Mem->find($_GET['id']);
?>

<h1 class="ct">編輯會員資料</h1>

<form action="./api/mem.php" method="post">
<table class="myTable">
    <tr>
        <th class="w-30 tt">帳號</th>
        <td class="pp">
        <?=$mem['acc']?>
        </td>
    </tr>
    <tr>
        <th class="w-30 tt">密碼</th>
        <td class="pp">
        <?=str_repeat('*',strlen($mem['pw']))?>
        </td>
    </tr>
    <tr>
        <th class="w-30 tt">姓名</th>
        <td class="pp"><input type="text" name="name" id="name" value="<?=$mem['name']?>"></td>
    </tr>
    <tr>
        <th class="w-30 tt">電子信箱</th>
        <td class="pp"><input type="text" name="email" id="email" value="<?=$mem['email']?>"></td>
    </tr>
    <tr>
        <th class="w-30 tt">地址</th>
        <td class="pp"><input type="text" name="addr" id="addr" value="<?=$mem['addr']?>"></td>
    </tr>
    <tr>
        <th class="w-30 tt">電話</th>
        <td class="pp"><input type="text" name="tel" id="tel" value="<?=$mem['tel']?>"></td>
    </tr>
</table>
<div class="ct">
    <input type="hidden" name="id" value="<?=$mem['id']?>">
    <input type="submit" value="編輯">
    <input type="reset" value="重置">
    <input type="button" value="取消" onclick="to('?do=mem')">
</div>

</form>