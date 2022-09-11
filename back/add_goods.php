<h1 class="ct">新增商品</h1>

<form action="./api/add_goods.php" method="post">
<table class="myTable">
    <tr>
        <th class="tt w-30">所屬大分類</th>
        <td class="pp">
            <select name="big" id="big">
            <?php
            $bigs = $Type->all(['parent'=>0]);
            foreach ($bigs as $key => $big) {
            ?>
            <option value="<?=$big['id']?>"><?=$big['name']?></option>
            <?php
            }
            ?>
            </select>
        </td>
    </tr>
    <tr>
        <th class="tt w-30">所屬中分類</th>
        <td class="pp">
            <select name="" id=""></select>
        </td>
    </tr>
    <tr>
        <th class="tt w-30">商品編號</th>
        <td class="pp">
            完成分類後自動分配
        </td>
    </tr>
    <tr>
        <th class="tt w-30">商品名稱</th>
        <td class="pp">
            <input type="text" name="name" id="name">
        </td>
    </tr>
    <tr>
        <th class="tt w-30">商品價錢</th>
        <td class="pp">
            <input type="text" name="price" id="price">
        </td>
    </tr>
    <tr>
        <th class="tt w-30">規格</th>
        <td class="pp">
            <input type="text" name="spec" id="spec">
        </td>
    </tr>
    <tr>
        <th class="tt w-30">庫存量</th>
        <td class="pp">
            <input type="text" name="qt" id="qt">
        </td>
    </tr>
    <tr>
        <th class="tt w-30">商品圖片</th>
        <td class="pp">
            <input type="file" name="img" id="img">
        </td>
    </tr>
    <tr>
        <th class="tt w-30">商品介紹</th>
        <td class="pp">
            <textarea name="intro" id="intro" cols="30" rows="10"></textarea>
        </td>
    </tr>
</table>
<div class="ct">
    <input type="submit" value="新增">
    <input type="reset" value="重置">
    <input type="button" value="取消" onclick="to('?do=th')">
</div>

</form>