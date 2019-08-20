<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>first form</title>
<style>
body{
	font-family:Georgia, "Times New Roman", Times, serif;
	font-style:bold;
	font-size:20px;
	}
	 </style>
</head>

<body bgcolor="#FFFF33">

<br />
<br />
<br /><br /><br /><br /><br />

<form action=" " method="post" name="form"/>
<center>
 Name: &nbsp; &nbsp; <input type="text" name="Name" /><br /><br/>
 Age: &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="Age"/><br /><br/>
 Address:  &nbsp;<input type="text" name="Address"/><br /><br/>
Mobile number: <input type="text" name="mobile" ><br>
<br>
 Gender:&nbsp;&nbsp;<input type="radio" name="Gender" value="male" selected/>Male
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Gender" value="female"/>Female<br /> </br>
 
 
 
 Select Course:<select name="Course">
 <option value="c"> C</option>
 <option value="c++">C++</option>
 <option value="java">JAVA</option>
 <option value="Php" >PHP</option><br />
 </select><br /><br /><br />


Languages Known: <input type="checkbox" name="cb[]" value="English"  />English<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="cb[]" value="Tamil" />Tamil<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="cb[]" value="Hindi" />Hindi<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="cb[]" value="Telugu" />Telugu<br/>
 
 <br/>
Mail-ID: <input type="text" name="mail"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">




</center>



<center><input type="submit" name="save" value="Submit"/></center><br/>


<?php 
$c=mysqli_connect("localhost","root","","fetch");
if(isset($_POST['save']))
{
	$na=$_POST['Name'];
	$ag=$_POST['Age'];
	$add=$_POST['Address'];
$mail=$_POST['mail'];
	$mob=$_POST['mobile'];
	if(isset($_POST['Gender']))
	{
		$g=$_POST['Gender'];
	}
	$cour=$_POST['Course'];
	$l1=" ";
	$lang=$_POST['cb'];
	foreach($lang as $l2)
	{
		$l1.=$l2. ",";
	}
	$sql="insert into fetch_table (Name,Age,Address,mobileno,gender,course,language,mailid) values ('$na','$ag','$add','$mob','$g','$cour','$l1','$mail')";
	
	
	if(mysqli_query($c,$sql))
	{  
	
header('location:fetch.php');	 
	
	}
	else{
	echo "data not inserted.error";
}}



	
?></body>
</html>