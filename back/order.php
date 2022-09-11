<h1 class="ct">訂單管理</h1>

<table class="w-100 ct">
    <tr class="tt">
        <th class="w-15">訂單編號</th>
        <th class="w-15">金額</th>
        <th class="w-15">會員帳號</th>
        <th class="w-15">姓名</th>
        <th class="w-15">下單時間</th>
        <th class="w-15">操作</th>
    </tr>

    <?php
    $ords = $Ord->all();
    foreach ($ords as $key => $ord) {
    ?>
    <tr class="pp">
        <td>
            <a href="?do=datail&no=<?=$ord['no']?>">
                <?=$ord['no']?>
            </a>
        </td>
        <td><?=$ord['total']?></td>
        <td><?=$ord['acc']?></td>
        <td><?=$ord['name']?></td>
        <td><?=$ord['orddate']?></td>
        <td>
        <input type="button" value="刪除" onclick="del(<?=$big['id']?>,'type')">
        </td>
    </tr>
    <?php
    }
    ?>
</table>