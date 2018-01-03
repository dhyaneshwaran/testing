<script type="text/javascript">
history.pushState(null,null,location.href);
window.onpopstate=function()
{
	history.go(1);
};
</script>

<html>
<head>
<title>
Sign Up/Login
</title>
</head>
<body>
<form action=" " method="post">
<center><br><br><br><br><br><br><br><br>
Username: &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" name="usern" placeholder="userName"><br><br>
Password: &nbsp; &nbsp; &nbsp; &nbsp; <input type="password" name="pswd" placeholder="Password"><br><br>
<input type="submit" name="login" value="Login" formaction="login.php"><br><br>
<input type="submit" name="register" value="Register" formaction="registerform.php"><br><br>

<input type="hidden" id="myField" name="getdate" value="">


</center>
</form>
<script>
function datefun()
{

var d = new Date();


  
    var h = d.getHours();
	var m = d.getMinutes();
    //var s = getSeconds();
	 
 var result = h+":"+m+":"+d.getSeconds()+","+d.toLocaleDateString();
 return result;
 //document.write(result+":"+m+":"+d.getSeconds());
//document.getElementById("demo").innerHTML =Date();

	

}
document.getElementById("myField").value=datefun();
</script>


</body>
</html>
