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
.style7 {font-weight: bold}
.style8 {font-size: 24px}
.style9 {color: #000000}
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
<p>&nbsp;</p>
<p align="center">&nbsp;</p>
</table>
<body>
<?php
include('../database/dbcon.php');
?>
<form action="deletcourse.php" method="post">
<p align="center" class="style4 style8 style9"><strong> Delete Course </strong></p>
<table border="1" align="center" bordercolor="#FFFFFF" bgcolor="#CCCCCC">
  <tr>
    <th><div align="center" class="style7 style14 style6 style4 style37">Course Name </div></th>
    <td><div align="center" class="style15">
      <select name="coursename">
    <option value="">Select Course</option>
    <?php 
    $query ="SELECT c_id,coursename FROM course";
    $result = $con->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $option =$optionData['coursename'];
        $id =$optionData['c_id'];
    ?>
   <option value="<?php echo $option; ?>"><?php echo $option; ?> </option>
   <?php
   }
   
   }
   ?>
</div>
  <tr>
    <td colspan="2" align="center"><div align="center">
      <input type="submit" name="submit" value="Search"/>
    </div></td>
  </tr>
</table>
<table width="1077" border="1" align="center" bordercolor="#FFFFFF" bgcolor="#CCCCCC">
  <tr bgcolor="#FFFFFF">
    <td width="169" height="36"><span class="style8 style37 style4"><strong>Course Id </strong></span></td>
    <td width="213"><span class="style8 style37 Estilo15 Estilo14 style15"><strong>Course Name </strong></span></td>
    <td width="248"><span class="style8 style37 Estilo15 Estilo14 style15"><strong> Course Description </strong></span></td>
    <td width="172"><span class="style8 style37 Estilo15 Estilo14 style15"><strong>Course Fee </strong></span></td>
    <td width="241"><span class="style8 style37 style4"><strong>Delete</strong></span></td>
  </tr>
  <?php
if(isset($_POST['submit']))
{
	include('../database/dbcon.php');
	$coursename=$_POST['coursename'];
	$sql="SELECT * FROM `course` WHERE `coursename`='$coursename'";
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
    <td><?php  echo $data['c_id']; ?>    </td>
    <td><?php  echo $data['coursename']; ?></td>
    <td><?php  echo $data['coursedescription']; ?></td>
    <td><?php  echo $data['coursefee']; ?></td>
    <td><p>&nbsp;
      </p>
      <p>
        <input type="hidden" name="coursename" value="<?php echo $data['coursename']; ?>"/>
        <input name="Delete" type="submit" value="Delete" required="required"/>
      </p>
      <p align="center">&nbsp;</p>
      <p>&nbsp;</p>    </td> 
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
</form>
</body>
</html>

<?php
if(isset($_POST['Delete']))
{
include('../database/dbcon.php');
$coursename=$_REQUEST['coursename'];
$qry="DELETE FROM `course` WHERE `coursename`= '$coursename'";
$run=mysqli_query($con,$qry);
if($run==true)
{
echo "<script> alert('Data Deleted Sucessfully...')</script>";
}
}
?>
