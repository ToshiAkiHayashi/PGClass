<?php
  include("conn.php");
?>
<table width=500 border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#add3ef">
<?php   
  $sql = "SELECT * FROM message order by lastdate desc";
  $query = mysql_query($sql);
  while($row = mysql_fetch_array($query)){
?>

  <tr bgcolor="#eff3ff">
  <td><b><big>
  	標題：<?= $row['title']?></big><b/>     <b><sub>
  	用戶：<?= $row['user']?></sub></b></td>
  </tr>
  <tr bgColor="#ffffff">
  <td>內容：<?= toHtmlcode($row['content'])?></td>
  </tr>
<?php 
  }
?>
</table>