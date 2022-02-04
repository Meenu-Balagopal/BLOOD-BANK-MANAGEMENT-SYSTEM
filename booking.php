
<?php 

include('connection.php');
/*if($uid=="")
{
header('location:plogin.php');
}*/
//$sql= mysqli_query($con,"select * from login where uid='$uid' "); 
//ss$result=mysqli_fetch_assoc($sql);
//print_r($result);
//extract($_REQUEST);
//error_reporting(1);
if(isset($booked))
{
 

   $sql="insert into booking(bid,pid,needed_date,quantity,doctor_name,purpose,booking_date) 
  values('$bid','$pid','$needed_date','$quantity','$doctor_name','$purpose','$booking_date')";
   if(mysqli_query($con,$sql))
   {
   echo "You have Successfully booked </h1><h2><a href='vorder.php'> <u>View </u></a></h2>"; 
   }
  }

?>

<html>
<head>
  <title>Online Booking</title>
  <link rel="stylesheet" type="text/css" href="pro1.css">

  </head>
<body><a href="patint.html">back</a><br>
<center>
 

  <h1><b><u> Booking</u></b> </h1><br>

     <form method="post">
	 
	 <table align="center">
             
          
		 <tr><th align="left">Needed Date :</th>
          
              <td align="left"><input type="date" name="needed_date" placeholder="Type Needed Date"required></td></tr>
          
           <tr><th align="left">Quantity :</th>
          
              <td align="left"><input type="number" name="quantity" placeholder="Enter Needed Number Of Bags" required></td></tr>
          
          <tr><th align="left"> Doctor Name :</th>
          
              <td align="left"><input type="text" name="doctor_name" placeholder="Enter Doctor Name"required></td></tr>
           <tr><th align="left">Purpose :</th>
          
             <td align="left"><textarea Rows="5" Cols="25" name="purpose"></textarea></td></tr>
			   
                    <tr><th></th><td align="left"><br><br><br><br><br><input type="submit"value="BOOK" name="booked" required/></td></tr>
          </table>
          </form><br>

</body>
</html>









