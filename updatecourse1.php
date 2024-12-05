<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-color: #b3daff;
}
.style1 {
	font-size: 36px;
	font-weight: bold;
	color: #000066;
}
.style2 {
	font-size: 24px;
	font-weight: bold;
}
.style3 {
	font-size: 18px;
	font-weight: bold;
}
.style4 {
	font-size: 36px;
	font-weight: bold;
}
.style37 {color: #000000}
.style5 {font-size: x-large;
	color: #FFFFFF;
	font-weight: bold;
}
.style36 {font-size: x-large; color: #000000; font-weight: bold; }
-->
</style></head>
<title>Admindash Boprd</title>

<body>
<div align="center"><span class="style1">Admindash Bord</span></div>
<h1 align="center"><img src="../image/ad2.jpg" width="1150" height="350" /></h1>
<table width="1180" height="377" align="center">
  <tr>
    <td width="387"><table width="200" height="41" border="1" align="center">
      <tr>
        <td><div align="center" class="style2">Menu</div></td>
      </tr>
    </table>
    <table width="200" height="138" border="1" align="center">
      <tr>
        <td height="45"><div align="center" class="style2">Insert</div></td>
      </tr>
      <tr>
        <td height="42"><div align="center" class="style2">Update</div></td>
      </tr>
      <tr>
        <td height="41"><div align="center" class="style2">Delete</div></td>
      </tr>
    </table></td>
    <td width="387"><img src="../image/ad4.jpg" width="396" height="321" /></td>
    <td width="366"><table width="200" height="41" border="1" align="center">
      <tr>
        <td><div align="center" class="style2">Reports</div></td>
      </tr>
    </table>
      <table width="200" height="217" border="1" align="center">
      <tr>
        <td><div align="center" class="style3"><a href="viewstudent.php">Veiw Student </a></div></td>
      </tr>
      <tr>
        <td><div align="center" class="style3"><a href="viewfeedback.php">View Student Feedback</a> </div></td>
      </tr>
      <tr>
        <td><div align="center" class="style3">view Student Addmission </div></td>
      </tr>
      <tr>
        <td><div align="center"><strong>BCA Studednt </strong></div></td>
      </tr>
      <tr>
        <td><div align="center" class="style3">Bsc Student </div></td>
      </tr>
      <tr>
        <td><div align="center" class="style3">BBA Students </div></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="1190" height="39" border="1" align="center">
  <tr>
    <td width="578"><div align="center"><span class="style2"><a href="../user/log.php">login</a></span></div></td>
    <td width="596"><div align="center" class="style2"><a href="../user/index.php">Logout</a></div></td>
  </tr>
</table>
<p align="center" class="style4"> Update Course </p>
<table border="1" align="center" bordercolor="#FFFFFF" bgcolor="#CCCCCC">
  <tr>
    <th><div align="center" class="style7 style14 style6 style4 style37">Course Name </div></th>
    <td><div align="center" class="style15">
      <input type="text" name="productname" placeholder="Enter product Name" required="required"/>
    </div></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><div align="center">
      <input type="submit" name="submit" value="Search"/>
    </div></td>
  </tr>
</table>
<table width="100%" border="2" align="center" bordercolor="#FFFFFF" bgcolor="#CCCCCC" style="margin-top:10px;">
  <tr style="background-color:#000000; color:#FFFFFF;" align="center">
    <th width="12%" bgcolor="#CCCCCC"><span class="style36">Course Id </span></th>
    <th width="14%" bgcolor="#CCCCCC"><span class="style36">Course  Name</span></th>
    <th width="16%" bgcolor="#CCCCCC"><span class="style36">Course Description</span></th>
    <th width="16%" bgcolor="#CCCCCC"><span class="style36">Course Fee </span></th>
    <th width="15%" bgcolor="#CCCCCC"><span class="style36"> Edit</span></th>
  </tr>
  <?php
if(isset($_POST['submit']))
{
include('../database/dbcon.php');
$productname=$_POST['productname'];
$sql="SELECT * FROM `insrtproduct` WHERE `productname`='$productname'";
$run=mysqli_query($con,$sql);
if(mysqli_num_rows($run)<1)
{
 echo "<tr><td colspan='5'>No Records Found</td></tr>";
 }
 else
 {
 $count=0;
 while($data=mysqli_fetch_assoc($run))
 {
 $count++;
 ?>
  <tr>
    <td><?php  echo $data['p_id']; ?></td>
    <td><?php  echo $data['productname']; ?></td>
    <td><?php  echo $data['productdescription']; ?></td>
    <td><?php  echo $data['quantity']; ?></td>
    <td><a href="updateproduct2.php?p_id=<?php  echo $data['p_id']; ?>">Edit</a></td>
  </tr>
  <?php
 }
 }
 
}
?>
</table>
<p>&nbsp;</p>
<p align="center" class="style4">&nbsp;</p>
<p>&nbsp;</p>
<p align="center">&nbsp;</p>
</body>
</html>
