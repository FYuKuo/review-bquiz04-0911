<?php
$num1 = rand(10,99);
$num2 = rand(10,99);
$_SESSION['code'] = $num1+$num2;
?>
<h1>第一次購物</h1>
<a href="?do=reg">
    <img src="./icon/0413.jpg" alt="">
</a>
<h1>會員登入</h1>

<table class="myTable">
    <tr>
        <th class="w-30 tt">帳號</th>
        <td class="pp"><input type="text" name="acc" id="acc"></td>
    </tr>
    <tr>
        <th class="w-30 tt">密碼</th>
        <td class="pp"><input type="password" name="pw" id="pw"></td>
    </tr>
    <tr>
        <th class="w-30 tt">驗證碼</th>
        <td class="pp"><?=$num1."+".$num2?><input type="text" name="anser" id="anser"></td>
    </tr>
</table>
<div class="ct"><input type="button" value="確認" onclick="login('mem')"></div>

<script>
    function login(table) {
        let acc = $('#acc').val();
        let pw = $('#pw').val();
        let anser = $('#anser').val();       
        let code = <?=$_SESSION['code'];?>;

        if(parseInt(anser) == parseInt(code)){
            $.get('./api/login.php',{acc,pw,table},(res)=>{
                if(parseInt(res) == 1){
                    to('./index.php');
                }else{
                    alert('帳號或密碼錯誤');
                }
            })
        }else{
            alert('對不起，您輸入的驗證碼有誤 \n 請您重新登入')
        }
    }
</script>