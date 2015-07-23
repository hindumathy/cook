<?php
include 'connection.php';
session_start();

//$conn= new mysqli("localhost","root","","cookdb");
$title=$_POST["title"];
$description=$_POST["description"];
$author=intval($_SESSION['id']);
$isopen=1;

$insert_query ="insert into request (author, title, description,isopen) values (".$author. ",'" .$title. "','" .$description. "'," .$isopen. ")";
$result = $conn->query($insert_query); 
echo("<script>");
if($result==TRUE){
//echo("<br> Successfully inserted into the Database");
echo ('window.location.assign("myRequests.php")');
}
else{
	echo ('window.location.assign("index.php")');
}
echo("</script>");

?>
