<?php


$c=mysqli_connect("localhost","root","","fetch");

$get=$_GET['id'];
$sql="select * from fetch_table where ID =$get";

$q=mysqli_query($c,$sql);
//echo'<pre>'; print_r($sql); exit;  

while($row=mysqli_fetch_array($q))
{
 $id=$row['ID'];
 $n=$row['Name'];

 $a=$row['Age'];
$add=$row['Address'];
$m=$row['mobileno'];
$g=$row['gender'];
$cou=$row['course'];
$l=$row['language'];
$mid=$row['mailid'];

  

		
}
//print_r($id); exit;
echo '';
/*echo '<form action=" ">

          <input type="text" name="Name" value='$b' /><br />
        </form>';
	
*/

?>


<form action="update.php" method="post" 	>
			<input type="hidden" name="id" value=<?php echo $id; ?>>
          name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="updatedname" value=<?php echo $n; ?> ><br />
		  age:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="updatedage" value=<?php echo $a;?> ><br />
		  address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="updatedaddress" value=<?php echo $add;?> ><br />
		  mobileno:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="updatedmobileno" value=<?php echo $m;?> ><br />
		  gender:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="updatedgender" value=<?php echo $g;?> ><br />
		  course:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="updatedcourse" value=<?php echo $cou;?> ><br />
          language&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="updatedlanguage" value=<?php echo $l;?> ><br />
          mailid:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="updatedmailid" value=<?php echo $mid;?> ><br />		                   
		   <input type="submit" name="save" value="update" /><br />
		
        </form>


