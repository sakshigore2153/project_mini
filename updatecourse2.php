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
-->
</style></head>
<title>Admindash Boprd</title>
<?php
include('../database/dbcon.php');
$c_id=$_GET['c_id'];
$sql="SELECT * FROM `course` WHERE `c_id`='$c_id'";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);
?>


<body>
<form action="demo.php" method="POST" enctype="multipart/form-data">
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
<p>&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center" class="style4 style7"><strong> Update Course </strong></p>
<table width="689" border="1" align="center" bordercolor="#FFFFFF" bgcolor="#CCCCCC">
  <tr>
    <td width="332" height="45"><div align="center" class="style36 style7 style8">
      <div align="center">Cource Name </div>
    </div></td>
    <td width="341"><div align="left">
      <input type="text" name="coursename" value="<?php echo $data['coursename']; ?>" />
    </div></td>
  </tr>
  <tr>
    <td width="332" height="45"><div align="center" class="style4 style36 style7 style9">
      <div align="center">course Description</div>
    </div></td>
    <td width="341"><div align="left">
      <textarea name="coursedescription"><?php echo $data['coursedescription'];?></textarea>
    </div></td>
  </tr>
  <tr>
    <td height="41"><div align="center" class="Estilo13 style7 style10">
      <div align="left" class="style35">
        <div align="center">Course Fee </div>
      </div>
    </div></td>
    <td><label>
      <input type="text" name="coursefee" value="<?php echo $data['coursefee'];?>" />
    </label></td>
  </tr>
</table>
<table width="64" border="1" align="center" bgcolor="#FFFFFF">
  <tr>
    <input type="hidden" name="id" value="<?php echo $data['c_id'];?>" />
    <td width="54"><input name="submit" type="submit" id="submit" value="submit" required="required" /></td>
  </tr>
</table>
<p align="center" class="style4">&nbsp;</p>
<p>&nbsp;</p>
<p align="center">&nbsp;</p>
</body>
</html>
