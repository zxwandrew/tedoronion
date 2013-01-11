<?php
	mysql_connect("localhost", "root", "password") or die("could not connect" . mysql_error());
	mysql_select_db("tedoronion");
	
if( isset($_POST['questionnumber'])){
	$questionnumber = $_POST['questionnumber']+1;
	$useranswer = $_POST['useranswer'];
}
	$query = "SELECT answer,source,title FROM answer where id=".$questionnumber.";";
	$correct = mysql_query($query);
	$correct = mysql_fetch_row($correct);
	
	if($useranswer==0){
				$ted=0;
				$onion=1;
			}else{
				$ted=1;
				$onion=0;
			}
	
	#echo $correct[0];
	#echo $useranswer;
	#echo $ted;
	#echo $onion;
	
	if($correct[0]==$useranswer){
		$query2 = "SELECT * FROM response where id=".$questionnumber.";";
		if(mysql_num_rows(mysql_query($query2))!=0){
			$query3="update response set total=total+1, TED=TED+".$ted.", Onion=Onion+".$onion.", Correct=Correct+1 where id=".$questionnumber;
		}else{
			$query3 = "Insert into `response` (`id`,`total`,`TED`,`Onion`,`Correct`) VALUES (".$questionnumber.",1,".$ted.",".$onion.",1);";
		}
		
	}else{
		$query2 = "SELECT * FROM response where id=".$questionnumber.";";
		if(mysql_num_rows(mysql_query($query2))!=0){
			$query3="update response set total=total+1, TED=TED+".$ted.", Onion=Onion+".$onion.", Correct=Correct+0 where id=".$questionnumber;
		}else{
			$query3 = "Insert into `response` (`id`,`total`,`TED`,`Onion`,`Correct`) VALUES (".$questionnumber.",1,".$ted.",".$onion.",0);";
		}
	}
	
	
	#echo ($query3);
	$exquery3 = mysql_query($query3);
	
	echo json_encode($correct);
?>