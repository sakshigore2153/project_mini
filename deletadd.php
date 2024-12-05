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
.style7 {color: #000000}
-->
</style></head>
<title>Admindash Boprd</title>

<body>
<div align="center"><span class="style1">Admindash Board</span></div>
<h1 align="center"><img src="../image/ad2.jpg" width="1134" height="284" /></h1>
<table width="1110" border="1" align="center" bordercolor="#FFFFFF" bgcolor="#FF99CC">
  <tr>
    <td width="544"><div align="center"><span class="style6"><a href="admindash.php">Student's Details </a></span></div></td>
    <td width="550"><div align="center" class="style6"><a href="coursedetails.php">Course Details </a></div></td>
  </tr>
</table>
<table width="1180" height="275" border="1" align="center" bordercolor="#FF99CC">
  <tr>
    <td width="387"><table width="200" height="41" border="1" align="center" bordercolor="#FFFFFF" bgcolor="#CCCCCC">
      <tr>
        <td><div align="center" class="style2">Menu</div></td>
      </tr>
    </table>
      <table width="246" height="181" border="1" align="center" bordercolor="#FFFFFF" bgcolor="#CCCCCC">
      <tr>
        <td width="236" height="45"><div align="center" class="style2"><a href="updataddmission1.php">Admission List</a> </div></td>
      </tr>
      <tr>
        <td height="42"><div align="center" class="style2"><a href="deletadd.php">Delete Admission </a></div></td>
      </tr>
      <tr>
        <td height="41"><div align="center" class="style2"><a href="../user/sak.php">Admission Form</a><a href="insertcourse.php"></a></div></td>
      </tr>
    </table></td>
    <td width="387"><img src="../image/ad4.jpg" width="396" height="293" /></td>
    <td width="366"><p>&nbsp;</p>
      <table width="200" height="41" border="1" align="center" bordercolor="#FFFFFF" bgcolor="#CCCCCC">
      <tr>
        <td><div align="center" class="style2">Reports</div></td>
      </tr>
    </table>
      <table width="244" height="201" border="1" align="center" bordercolor="#FFFFFF" bgcolor="#CCCCCC">
        <tr>
          <td><div align="center" class="style3"><a href="viewstudent.php">Registration List </a></div></td>
        </tr>
        <tr>
          <td><div align="center" class="style3"><a href="viewfeedback.php"> Student's Feedback</a> </div></td>
        </tr>
        <tr>
          <td><div align="center" class="style3"><a href="viewaddmission.php"> All Student Addmission</a> </div></td>
        </tr>
        <tr>
          <td height="24"><div align="center" class="style3">
              <p><a href="paymentreport.php">View Payment </a></p>
          </div></td>
        </tr>
        <tr>
          <td><div align="center" class="style3"><a href="cvsr.php">Courses Wise Student </a></div></td>
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
<p align="center" class="style2">Disapproved Admission </p>
<?php
include('../database/dbcon.php');
?>
<form action="deletadd.php" method="post">
  <table border="1" align="center" bordercolor="#FFFFFF" bgcolor="#CCCCCC">
  <tr>
    <th><div align="center" class="style14 style6 style4 style37 style7">Course Name </div></th>
    <td><div align="center" class="style15">
      <select name="course">
        <option value="">Select Course</option>
        <?php 
    $query ="SELECT admid,course FROM addmission";
    $result = $con->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $option =$optionData['course'];
        $id =$optionData['admid'];
    ?>
        <option value="<?php echo $option; ?>"><?php echo $option; ?> </option>
        <?php
    }}
    ?>
      </select>
    </div></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><div align="center">
      <input type="submit" name="submit" value="Search"/>
    </div>
</td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="1140" border="1" align="center" bordercolor="#FFFFFF" bgcolor="#CCCCCC">
  <tr>
    <td width="131" height="36"><div align="center" class="style46">Admission ID  </div></td>
    <td width="147"><div align="center" class="style47"><strong>Courses</strong></div></td>
    <td width="158"><div align="center" class="style47"><span class="Estilo15 style15"><strong><span class="style15 style37"> Student Name </span></strong></span></div></td>
    <td width="169"><div align="center" class="style47"><span class="Estilo15 style15"><strong><span class="style15 style37">Student Percentage </span></strong></span></div></td>
    <td width="214"><p align="center" class="style47"><strong>Student previous Course </strong></p>
    <p align="center" class="style47">&nbsp;</p></td>
    <td width="130"><div align="center" class="style47"><strong> Student Status </strong></div></td>
    <td width="145"><div align="center" class="style47"><strong><strong>Delete</strong></strong></div></td>
  </tr>
  <?php
if(isset($_POST['submit']))
{
include('../database/dbcon.php');
$course=$_POST['course'];
$sql="SELECT * FROM `addmission` WHERE `course`='$course'";
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
    <td><?php  echo $data['admid']; ?>    </td>
    <td><?php  echo $data['course']; ?></td>
    <td><?php  echo $data['name']; ?></td>
    <td><?php  echo $data['precentage']; ?></td>
	<td><?php  echo $data['prevcourse']; ?></td>
    <td><?php  echo $data['status']; ?></td>
    <td><p>&nbsp; </p>
      <p>
        <input type="hidden" name="admid" value="<?php echo $data['admid']; ?>"/>
        <input name="Delete" type="submit" value="Delete" required="required"/>
      </p>
    <p align="center"></p></td>
  </tr>
  <?php
 }
 }
 
}
?>
</table>
<p align="center">&nbsp;</p>
<p>&nbsp;</p>
<p align="center" class="style2">&nbsp;</p>
<p>&nbsp;</p>
<p align="center">&nbsp;</p>
</form>
</body>
</html>

<?php
if(isset($_POST['Delete']))
{
include('../database/dbcon.php');
$admid=$_REQUEST['admid'];
$qry="DELETE FROM `addmission` WHERE `admid`= '$admid'";
$run=mysqli_query($con,$qry);
if($run==true)
{
echo "<script> alert('Data Deleted Sucessfully...')</script>";
}
}
?>