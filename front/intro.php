<?php
$good=$Goods->find($_GET['id']);
?>
<h1 class="ct"><?=$good['name']?></h1>

<div class="d-f w-80 aut my-5">
    <div class="d-f w-60 a-c pp m-2 j-c p-10">
        <img src="./img/<?=$good['img']?>" alt="" style="height: 180px;">
    </div>
    <div class="w-40">
        <div class="pp m-2 p-10"><?=$Type->find($good['big'])['name'].'>'.$Type->find($good['mid'])['name']?></div>
        <div class="pp m-2 p-10">
            編號：<?=$good['no']?>
        </div>
        <div class="pp m-2 p-10">
            價錢：<?=$good['price']?>
        </div>
        <div class="pp m-2 p-10">
            詳細說明：<?=$good['intro']?>
        </div>
        <div class="pp m-2 p-10">
            庫存：<?=$good['qt']?>
        </div>

    </div>

</div>
<div class="w-80 aut">
    <div class="tt ct">
        購買數量<input type="number" name="qt" id="qt" min="1" value="1"> <img src="./icon/0402.jpg" alt="" onclick="buy()">
    </div>
</div>


<script>
    function buy(){
        let qt = $('#qt').val();

        
        to(`?do=buycart&id=<?=$good['id']?>&qt=${qt}`)
    }
</script>