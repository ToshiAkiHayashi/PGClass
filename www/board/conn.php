<?php
	include("head.php");
	$dbName = "bbs";
	$conn = @ mysql_connect("localhost", "root", "") or die("數據庫鏈接錯誤");
	$flag = mysql_select_db($dbName, $conn);
	mysql_query("set names 'GBK'"); //使用GBK中文編碼;
	
	function toHtmlcode($content)
	{
	    return $content = str_replace("\n","<br>",str_replace(" ", "&nbsp;", $content));
	}
?>