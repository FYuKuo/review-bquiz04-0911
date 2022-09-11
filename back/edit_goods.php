<?php
$good = $Goods->find($_GET['id']);

?>

<h1 class="ct">修改商品</h1>

<form action="./api/edit_goods.php" method="post" enctype="multipart/form-data">
<table class="myTable">
    <tr>
        <th class="tt w-30">所屬大分類</th>
        <td class="pp">
            <select name="big" id="big">
            <?php
            $bigs = $Type->all(['parent'=>0]);
            foreach ($bigs as $key => $big) {
            ?>
            <option value="<?=$big['id']?>" <?=($big['id'] == $good['big'])?'selected':''?>><?=$big['name']?></option>
            <?php
            }
            ?>
            </select>
        </td>
    </tr>
    <tr>
        <th class="tt w-30">所屬中分類</th>
        <td class="pp">
            <select name="mid" id="mid">
            <?php
            $mids = $Type->all(['parent'=>$good['big']]);
            foreach ($mids as $key => $mid) {
            ?>
            <option value="<?=$mid['id']?>" <?=($mid['id'] == $good['mid'])?'selected':''?>><?=$mid['name']?></option>
            <?php
            }
            ?>
            </select>
        </td>
    </tr>
    <tr>
        <th class="tt w-30">商品編號</th>
        <td class="pp myNo">
            <?=$good['no']?>
            <input type="hidden" name="no" value="<?=$good['no']?>">
        </td>
    </tr>
    <tr>
        <th class="tt w-30">商品名稱</th>
        <td class="pp">
            <input type="text" name="name" id="name" value="<?=$good['name']?>">
        </td>
    </tr>
    <tr>
        <th class="tt w-30">商品價錢</th>
        <td class="pp">
            <input type="text" name="price" id="price" value="<?=$good['price']?>">
        </td>
    </tr>
    <tr>
        <th class="tt w-30">規格</th>
        <td class="pp">
            <input type="text" name="spec" id="spec" value="<?=$good['spec']?>">
        </td>
    </tr>
    <tr>
        <th class="tt w-30">庫存量</th>
        <td class="pp">
            <input type="text" name="qt" id="qt" value="<?=$good['qt']?>">
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
            <textarea name="intro" id="intro" cols="30" rows="10"><?=$good['intro']?></textarea>
        </td>
    </tr>
</table>
<div class="ct">
    <input type="hidden" name="id" value="<?=$good['id']?>">
    <input type="submit" value="修改">
    <input type="reset" value="重置">
    <input type="button" value="取消" onclick="to('?do=th')">
</div>

</form>

<script>

    function get_mid(){
        let big = $('#big').val();

        $.get('./api/get_mid.php',{big},(res)=>{
            // console.log(res);
            $('#mid').html(res);
        })
    }

    $('#big').on('change',function(){
        get_mid();
    })



    $('#big,#mid').on('change',function(){
        let big = $('#big').val();
        let mid = $('#mid').val();

        $.get('./api/get_no.php',{big,mid},(res)=>{
            // console.log(res);
            $('.myNo').html(res);
        })
    })


    
</script>

