// JavaScript Document
function to(x)
{
	location.href=`${x}`;
}

function lo()
{
	location.reload();
}

function reset()
{
	$('input[type=text],input[type=password]').val('');
}

function del(id,table)
{
	$.post('./api/del.php',{id,table},()=>{
		lo();
		// console.log(res);
	})
}

function sh(id,sh,table)
{
	$.post('./api/sh.php',{id,sh,table},()=>{
		lo();
	})
}