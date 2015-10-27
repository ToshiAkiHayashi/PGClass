<?php
// 引用之前寫好的連接數據庫文件
include("conn.php");

if(@$_POST['submit']){
	$sql = "insert into message (id,user,title,content,lastdate)" .
	"values ( '','$_POST[userName]','$_POST[title]','$_POST[content]',now())";
	mysql_query($sql);
	echo "添加成功";
}	

?>

<SCRIPT language=javascript>
function CheckPost()
{
	if (myform.userName.value=="")
	{
		alert("請填寫用戶名");
		myform.user.focus();
		return false;
	}
	if (myform.title.value.length<5)
	{
		alert("標題不能少於5個字符");
		myform.title.focus();
		return false;
	}
	if (myform.content.value=="")
	{
		alert("必須要填寫留言內容");
		myform.content.focus();
		return false;
	}
	
}
</SCRIPT>

<form action="addmsg.php"  method="post" name = "myform" onsubmit="return CheckPost();">
	用名:<input type="text" size="10" name="userName" /><br/>
	標題:<input type="text" name="title" /><br/>
	內容:<textarea  name="content" cols="60" rows="9" ></textarea><br/>
	<input type="submit" name="submit" value="提交留言" />
</form>