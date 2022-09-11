<h1 class="ct">編輯頁尾版權區</h1>

<form action="./api/bot.php" method="POST">
    <table class="myTable">
        <tr>
            <th class="tt">頁尾宣告內容</th>
            <td class="pp"><input type="text" name="bot" id="bot" style="width: 90%;" value="<?=$Bot->find(1)['bot']?>"></td>
        </tr>
    </table>
    <div class="ct">
        <input type="hidden" name="id" value="1">
        <input type="submit" value="編輯">
        <input type="reset" value="重置">
    </div>
</form>