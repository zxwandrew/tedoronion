<?php
//$form='<form method="post" action="process.php">
//    url: <input type="text" name="url"/>
//    <br/>
//    <input type="submit"/>
//</form>';
////echo $form;
mysql_connect("localhost", "root", "password") or
        die("could not connect". mysql_error());
mysql_select_db("websys");
//print_r($_POST)
if( isset($_POST['url'])){
$url = $_POST['url'];
$results = mysql_query( "Insert into url Values('" . $url ."');" );
echo "success";
}


?>