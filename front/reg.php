<h1 class="ct">會員註冊</h1>

<table class="myTable">
    <tr>
        <th class="w-30 tt">姓名</th>
        <td class="pp"><input type="text" name="name" id="name"></td>
    </tr>
    <tr>
        <th class="w-30 tt">帳號</th>
        <td class="pp">
            <input type="text" name="acc" id="acc"><input type="button" value="檢查帳號" onclick="chk_acc()">
        </td>
    </tr>
    <tr>
        <th class="w-30 tt">密碼</th>
        <td class="pp"><input type="password" name="pw" id="pw"></td>
    </tr>
    <tr>
        <th class="w-30 tt">電話</th>
        <td class="pp"><input type="text" name="tel" id="tel"></td>
    </tr>
    <tr>
        <th class="w-30 tt">地址</th>
        <td class="pp"><input type="text" name="addr" id="addr"></td>
    </tr>
    <tr>
        <th class="w-30 tt">電子信箱</th>
        <td class="pp"><input type="text" name="email" id="email"></td>
    </tr>
</table>
<div class="ct">
    <input type="button" value="註冊" onclick="reg()">
    <input type="button" value="重置" onclick="reset()">
</div>

<script>
    function chk_acc(){
        let acc = $('#acc').val();

        $.get('./api/chk_acc.php',{acc},(res)=>{
            alert(res);
        })
    }

    function reg() {
        let name = $('#name').val();
        let acc = $('#acc').val();
        let pw = $('#pw').val();
        let tel = $('#tel').val();
        let addr = $('#addr').val();
        let email = $('#email').val();
        

        $.get('./api/chk_acc.php',{acc},(res)=>{
            if(res == '帳號可使用'){

                $.post('./api/reg.php',{name,acc,pw,tel,addr,email},()=>{
                    alert('註冊成功，歡迎加入');
                    to('?do=login');
                })

            }else{
                alert(res);
            }
        })

    }
</script>