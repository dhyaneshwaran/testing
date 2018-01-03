<?php
$c=mysqli_connect("localhost","root","","fetch");
$id=$_GET['ID'];

$sql = "SELECT * FROM fetch_table where ID=$id";
$q=mysqli_query($c,$sql);
//$result = mysqli_query($c, $sql);

/*if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["ID"]. " - Name: " . $row["Name"]. "  -AGE " . $row["Age"]. "<br>";
    }
} else {
    echo "0 results";
}
*/

while($row=mysqli_fetch_array($q))
{
 echo "ID"; echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";echo $row['ID']; 	echo "</br>";
 echo "NAME"; echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";echo $row['Name'];echo "</br>";
 echo "AGE"; echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";echo $row['Age'];echo "</br>";
 echo "ADDRESS"; echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";echo $row['Address'];echo "</br>";
 echo "MOBILE_NUMBER"; echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";echo $row['mobileno'];echo "</br>";
echo "GENDER"; echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";echo $row['gender'];echo "</br>";
echo "COURSE_SELECTED"; echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";echo $row['course'];echo "</br>";
echo "LANGUAGE"; echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";echo $row['language'];echo "</br>";
echo "MAIL_ID"; echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";echo $row['mailid'];echo "</br>";
}
mysqli_close($c);
?>

