<?php
$c=mysqli_connect("localhost","root","","fetch");
$id=$_GET['id'];


 $sql = "DELETE FROM fetch_table WHERE ID=$id";
 $q=mysqli_query($c,$sql);
if($q)
{
 header('location:fetch.php');
}
else {
	echo "failed";
}
//exit();
?>
