<?php
	mysql_connect("localhost", "root", "password") or die("could not connect" . mysql_error());
	mysql_select_db("tedoronion");
	
	
if( isset($_POST['quote'])){
	$quote = $_POST['quote'];
	$source = $_POST['source'];
	$time = $_POST['time'];
	$answer = $_POST['tedoronion'];
	if($answer=="TED"){
		$answer=1;
	}else{
		$answer=0;
	}
}
	$query = "INSERT INTO `submission` (`quote`, `source`, `time`, `answer`) VALUES ('".$quote."','".$source."','".$time."',".$answer.");";
	$submit = mysql_query($query);

	echo "success";
?>