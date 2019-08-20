<html>
<head>
<style>
table, th, td {
    border:2px solid grey;
	 border-collapse:collapse;

}
a
{
	text-decoration:none;
}</style>
</head>
<body>
<?php
$c=mysqli_connect("localhost","root","","fetch");
$sql="select * from fetch_table";
$q=mysqli_query($c,$sql);

echo "<center>";	
echo "<table align='center'>";
echo "<tr>";
echo "<th>"; echo "STUDENT_ID "; echo "</th>";	
echo "<th>"; echo "STUDENT_NAME "; echo "</th>";	
echo "<th>"; echo "STUDENT_AGE "; echo "</th>";	
echo "<th>"; echo "ADDRESS "; echo "</th>";
echo "<th>"; echo "MOBILE_NUMBER"; echo "</th>";
echo "<th>"; echo "GENDER"; echo "</th>";
echo "<th>"; echo "COURSE"; echo "</th>";
echo "<th>"; echo "LANGUAGES KNOWN"; echo "</th>";
echo "<th>"; echo "E-MAIL"; echo "</th>";
echo "<th>"; echo "MODIFY"; echo "</th>";
echo "<th>"; echo "EDIT"; echo "</th>";
echo "<th>"; echo "VIEW"; echo "</th>";echo "</tr>";
while($row=mysqli_fetch_array($q))
{	
echo "<tr>";
echo "<td>"; echo $row['ID']; echo"</td>";
echo "<td>";echo $row['Name']; echo "</td>";
echo "<td>";echo $row['Age'];echo "</td>";
echo "<td>";echo $row['Address'];echo "</td>";
echo "<td>";echo $row['mobileno']; echo "</td>";
echo "<td>";echo $row['gender'];echo "</td>";
echo "<td>";echo $row['course'];echo "</td>";
echo "<td>";echo $row['language'];echo "</td>";
echo "<td>";echo $row['mailid'];echo "</td>";
echo "<td>";echo'<a href="delete.php ?id='.$row["ID"].'"> Delete</a>';echo "</td>";
echo "<td>";echo'<a href="edit1.php ?id= '.$row["ID"].'"> Edit</a>';echo "</td>";
echo "<td>";echo'<a href="view.php ?ID='.$row["ID"].'"> View</a>';echo "</td>";echo "</tr>";



}echo "</table>";
echo "</center>";
?>
</body>
</html>