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
.style6 {font-size: 24px; font-weight: bold; color: #FFFFFF; }
.style39 {font-size: 24px}
-->
</style></head>
<title>Admindash Boprd</title>

<body>
<div align="center"><span class="style1">Admindash Board</span></div>
<h1 align="center"><img src="../image/ad2.jpg" width="1134" height="284" /></h1>
<table width="1110" border="1" align="center" bordercolor="#FFFFFF" bgcolor="#FF99CC">
  <tr>
    <td width="544"><div align="center"><span class="style6"><a href="admindash.php">Student Details </a></span></div></td>
    <td width="550"><div align="center" class="style6"><a href="coursedetails.php">Course Details</a> </div></td>
  </tr>
</table>
<table width="1180" height="275" border="1" align="center" bordercolor="#FF99CC">
  <tr>
    <td width="387"><table width="200" height="41" border="1" align="center" bordercolor="#FFFFFF" bgcolor="#CCCCCC">
      <tr>
        <td><div align="center" class="style2">Menu</div></td>
      </tr>
    </table>
      <table width="246" height="138" border="1" align="center" bordercolor="#FFFFFF" bgcolor="#CCCCCC">
      <tr>
        <td width="236" height="45"><div align="center" class="style2"><a href="insertcourse.php">Insert Course  </a></div></td>
      </tr>
      <tr>
        <td height="42"><div align="center" class="style2"><a href="updatecourse1.php">Update course </a></div></td>
      </tr>
      <tr>
        <td height="41"><div align="center" class="style2"><a href="deletcourse.php">Delete Course </a></div></td>
      </tr>
    </table></td>
    <td width="387"><img src="../image/ad4.jpg" width="396" height="293" /></td>
    <td width="366"><p>&nbsp;</p>
      <table width="200" height="41" border="1" align="center" bordercolor="#FFFFFF" bgcolor="#CCCCCC">
      <tr>
        <td><div align="center" class="style2">Reports</div></td>
      </tr>
    </table>
      <table width="244" height="98" border="1" align="center" bordercolor="#FFFFFF" bgcolor="#CCCCCC">
      <tr>
        <td height="52"><div align="center" class="style3"><a href="course_report.php">Veiw All Course </a></div></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="1190" height="39" align="center">
  <tr>
    <td width="578"><div align="center"><span class="style2"><a href="../user/log.php">login</a></span></div></td>
    <td width="596"><div align="center" class="style2"><a href="../user/index.php">Logout</a></div></td>
  </tr>
</table>
<p>
  </table>
</p>
<p align="center" class="style4 style39"><strong>Insert Course </strong></p>
<form action="insertcourse.php" method="post" >
<table width="722" height="307" border="3" align="center" bordercolor="#FFFFFF" bgcolor="#CCCCCC">
  <tr>
    <td width="357" height="69" class="style2"><label></label>
        <h3 align="center"><strong>Course Name </strong></h3></td>
    <td width="345"><input name="coursename" type="text" /></td>
  </tr>
  <tr>
    <td height="66" class="style4"><div align="left" class="style5 style2">
      <div align="center" class="style36">Course Description </div>
    </div></td>
    <td class="Estilo9"><textarea name="coursedescription" cols="" rows=""></textarea>
      &nbsp;</td>
  </tr>
  <tr>
    <td height="74" class="style4"><div align="center" class="style38 style39"><strong><span class="style37">Course Fee </span></strong></div></td>
    <td><label>
      <input name="coursefee" type="text"/>
    </label></td>
  </tr>
  </table>
<table width="77" border="2" align="center" bordercolor="#FFFFFF" bgcolor="#666666">
  <tr>
    <td width="104"><div align="center">
      <input name="submit" type="submit" value="submit" />
      &nbsp;</div></td>
  </tr>
</table>
<p align="center" class="style4">&nbsp;</p>
<p align="center">&nbsp;</p>
</form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
include('../database/dbcon.php');
$coursename=$_POST['coursename'];
$coursedescription =$_POST['coursedescription'];
$coursefee=$_POST['coursefee'];

$qry="INSERT INTO `course`(`coursename`,`coursedescription`,`coursefee`)VALUES('$coursename','$coursedescription','$coursefee')";
$run=mysqli_query($con,$qry);
if($run==true)
{
	echo '<script>alert("Insert course successfully...")</script>';
   echo '<script>window.location.href = admindash.php";</script>';
}
else
{
  echo '<script>alert("Inserting Error...")</script>';
   echo '<script>window.location.href = "admindash.php";</script>';
 }
}

?>



