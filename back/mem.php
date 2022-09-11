<h1 class="ct">會員管理</h1>

<table class="myTable ct">
    <tr class="tt">
        <th class="w-25">姓名</th>
        <th class="w-25">會員帳號</th>
        <th class="w-25">註冊日期</th>
        <th class="w-25">操作</th>
    </tr>
    <?php
    $rows = $Mem->all();
    foreach ($rows as $key => $row) {
    ?>
    <tr class="pp">
        <td><?=$row['name']?></td>
        <td><?=$row['acc']?></td>
        <td><?=$row['regdate']?></td>
        <td>
            <input type="button" value="修改" onclick="to('?do=edit_mem&id=<?=$row['id']?>')">
            <input type="button" value="刪除" onclick="del(<?=$row['id']?>,'<?=$do?>')">
        </td>
    </tr>
    <?php
    }
    ?>
</table>