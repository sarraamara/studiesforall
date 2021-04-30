<?php
 include 'config.php';
 $linkHtml=$_POST['linkHtml'];
 echo "hey";
 $selectedValue=$_POST['selectedValue'];
 $sql="insert into links(linkHtml,selectedValue) values('".$linkHtml."','".$selectedValue."')";
 $result = pg_query($dbconn,$sql_query);
 if($result==null){
 	echo "error";
 }

?>