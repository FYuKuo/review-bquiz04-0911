<?php
$id = ($_GET['id'])??0;
if($id == 0){
    $goods = $Goods->all(['sh'=>1]);
    $text = "全部商品";
}else{
    $type = $Type->find($id);

    if($type['parent'] == 0){
        $goods = $Goods->all(['sh'=>1,'big'=>$id]);
        $text = $type['name'];

    }else{
        $goods = $Goods->all(['sh'=>1,'mid'=>$id]);
        $text = $Type->find($type['parent'])['name'] .">". $type['name'];
    }
}
?>

<h2><?=$text?></h2>

<?php
foreach ($goods as $key => $good) {
?>
<div class="d-f w-80 aut my-5">
    <div class="d-f w-40 a-c pp m-2 j-c p-10">
        <a href="?do=intro&id=<?=$good['id']?>">
            <img src="./img/<?=$good['img']?>" alt="" style="height: 120px;">
    </a>
    </div>
    <div class="w-60">
        <div class="ct tt m-2 p-10"><?=$good['name']?></div>
        <div class="pp d-f j-b m-2 p-10">
            <div>價錢：<?=$good['price']?></div>
            <a href="?do=buycart&id=<?=$good['id']?>&qt=1">
                <img src="./icon/0402.jpg" alt="">
        </a>
        </div>
        <div class="pp m-2 p-10">
            規格：<?=$good['spec']?>
        </div>
        <div class="pp m-2 p-10">
            簡介：<?=mb_substr($good['intro'],0,25)?>...
        </div>
    </div>
</div>
<?php
}
?>

