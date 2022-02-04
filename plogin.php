 <html>
<head>
<title>
Login
</title>
<link rel="stylesheet" type="text/css" href="logincss.css">
</head>
<body>
<center><br><br><br><br><br><br><br><br><br>
<h1><big>&nbsp;&nbsp;&nbsp;&nbsp;L O G I N&nbsp;&nbsp;</big></h1>
<br><br><br>
<form method ="post" name="frm" onsubmit="return Pvalidate()">

<table align="center">
<img src="bloodpic.png" align="left" />

<tr><th align="center"><h4>USER_ID: </h4></th><td align="right"><input type="text" name="uid" required /></td></tr>
<tr><th align="center"><h4>PASSWORD : </h4></th><td align="right"><input type="password" name="pwd" required /></td></tr>
<tr><td></td><td align="center"><input type="submit" name="submit"  value="LOGIN" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value="CLEAR" /></td></tr>
<tr></tr><tr></tr>
<tr><td colspan="2" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="patient.php"> NEW REGISTRATION</a></td></tr>
<tr><td colspan="2" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Home.php">BACK TO HOME PAGE</a>

</table>
</form>
</center>
<br><br><br>

</body>
</html>
<?php
session_start();
if(isset($_POST["submit"]))
{
$uid=$_POST["uid"];
$pwd=$_POST["pwd"];
$conn = mysqli_connect ("localhost","root","");
if(!$conn) {die("could not connect:".mysqli_error());}
//else
//echo"successful connection<br>";
$db_fnd=mysqli_select_db($conn,"project");
if(!$db_fnd) {die("could not connect:".mysqli_error() );}
//else
//echo"successful connection<br>";
$qr=mysqli_query($conn,"select * from login where uid='$uid' and pwd='$pwd' and role='patient'") or die("Error:".mysqli_error($conn)); //and Role='Patient'
if(mysqli_num_rows($qr)>0)
{
	$_SESSION['uid']=$uid;
	header("location:patint.html");
	exit;
}
else
{
echo"Invalid username or password<br>";
header("refresh:3;url=plogin.php");
}
mysqli_close($conn);
}
?>

<script>
function Pvalidate()
 {
	var u=document.forms["frm"]["uid"];
	var p=document.forms["frm"]["pwd"];
	if(u.value==" ")
	{
		window.alert("Please enter UserId");
		u.focus();
		return false;	
	}
	if(p.value==" ")
	{
		alert("Please enter password");
		p.focus();
		return false;	
	}
	if(p.value.length < 0||p.value.length < 5 )
	{
		alert("Enter a password with atleast 5 characters");
		n.focus();
		return false;
	}
	return true;
 }
</script>