<?php
if (isset($_GET['IT'])&&($_GET['IT']!='')){
	$word=$_GET['IT'];
	$link = mysql_connect('localhost','root','');
	if (!$link){
		die('Ошибка подключения к аккаунту:'.mysql_error());
	}
	$db = mysql_select_db('test',$link);
	if (!$db){
		die('Ошибка подключения к базе:'.mysql_error());
	}
	$q=mysql_query("SELECT * FROM six WHERE word LIKE '$word%'");
	if (!$q){
		die('error');
	}
	$count = mysql_num_rows($q);
	if ($count!=0){
		$arr=array();
		for ($i=0;$i<$count;$i++){
			$arr[$i]=mysql_result($q,$i,0);
		}
		//sort($arr);
		$arr= array_map("rtrim",$arr);
		$str= implode("\r\n",$arr);
		echo "$str";
			
	}
	else echo 'No such words in database';
}
else echo " ";
?>
