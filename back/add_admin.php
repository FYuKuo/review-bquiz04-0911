<h1 class="ct">新增管理帳號</h1>


<form action="./api/admin.php" method="post">
<table class="myTable">
    <tr>
        <th class="tt w-40">帳號</th>
        <td class="pp"><input type="text" name="acc" id="acc"></td>
    </tr>
    <tr>
        <th class="tt">密碼</th>
        <td class="pp"><input type="password" name="pw" id="pw"></td>
    </tr>
    <tr>
        <th class="tt">權限</th>
        <td class="pp p-5">
            <input type="checkbox" name="pr[]" value="1">商品分類與管理 <br>
            <input type="checkbox" name="pr[]" value="2">訂單管理 <br>
            <input type="checkbox" name="pr[]" value="3">會員管理 <br>
            <input type="checkbox" name="pr[]" value="4">頁尾版權管理 <br>
            <input type="checkbox" name="pr[]" value="5">最新消息管理
        </td>
    </tr>
</table>
<div class="ct">
    <input type="submit" value="新增">
    <input type="reset" value="重置">
</div>
</form>