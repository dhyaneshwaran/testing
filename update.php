<?php
$c=mysqli_connect("localhost","root","","fetch");
//$conn = mysqli_connect("localhost","root","","fetch");
//$getid=$_GET['id'];
//print_r($_POST); exit;

if(isset($_POST['save']))
{
	$id = $_POST['id'];
	$n=$_POST['updatedname'];
	$a=$_POST['updatedage'];
	$add=$_POST['updatedaddress'];
	$m=$_POST['updatedmobileno'];
	$g=$_POST['updatedgender'];	
	$cou=$_POST['updatedcourse'];
	$l=$_POST['updatedlanguage'];
	$mid=$_POST['updatedmailid'];
	//$upd="insert into fetch_table (Name,Age,Address) values ('$n','$a','$add') where ID=$id";
	$upd = "UPDATE `fetch_table` SET `Name`= '$n',`Age`= '$a',`Address`='$add',`mobileno`= '$m',`gender`= '$g',`course`= '$cou',`language`= '$l',`mailid`= '$mid' WHERE ID = $id";
	
	
	//echo'<pre>'; print_r($upd); exit; 
	if(mysqli_query($c,$upd))
	{
	header('location:fetch.php');
	}
		
		}






?>