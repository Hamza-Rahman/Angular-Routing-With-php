<?php


try{
	$conn = new PDO("mysql:host=localhost;dbname=tblstudent","root","");
}
catch(PDOException $e){

 	die("Connection is error".$e->getmessage());

}

?>