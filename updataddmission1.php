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

<body>
<form action="updataddmission1.php" method="post">

  <?php
include('../database/dbcon.php');
?>

<p align="center" class="style2">Approved Admission  </p>
<table border="1" align="center" bordercolor="#FFFFFF" bgcolor="#CCCCCC">
  <tr>
    <th><div align="center" class="style14 style6 style4 style37 style7">Course Name </div></th>
    <td><div align="center" class="style15 style7">
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
    <td colspan="2" align="center"><div align="center" class="style7">
      <input type="submit" name="submit" value="Search"/>
    </div></td>
  </tr>
</table>
<table width="100%" border="2" align="center" bordercolor="#FFFFFF" bgcolor="#CCCCCC" style="margin-top:10px;">
  <tr style="background-color:#000000; color:#FFFFFF;" align="center">
    <th width="12%" bgcolor="#CCCCCC"><span class="style36 style7">addmission Id </span></th>
    <th width="14%" bgcolor="#CCCCCC" class="style7"><span class="style36">Acadmic year</span></th>
    <th width="16%" bgcolor="#CCCCCC" class="style7"><span class="style36">Course </span></th>
    <th width="16%" bgcolor="#CCCCCC" class="style7"><span class="style36">student name</span></th>
   <th width="16%" bgcolor="#CCCCCC" class="style7"><span class="style36">Percentage</span></th>
   <th width="16%" bgcolor="#CCCCCC" class="style7"><span class="style36">previous Course</span></th>
    <th width="16%" bgcolor="#CCCCCC" class="style7"><span class="style36">Status</span></th>
    <th width="15%" bgcolor="#CCCCCC" class="style7"><span class="style36"> Approved</span></th>
  </tr>
  <span class="style7">
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
  </span>
  <tr>
    <td class="style7"><input type="hidden" name="admid" value="<?php  echo $data['admid']; ?>" /><?php  echo $data['admid']; ?></td>
    <td class="style7"><?php  echo $data['acadamic']; ?></td>
    <td class="style7"><?php  echo $data['course']; ?></td>
    <td class="style7"><?php  echo $data['name']; ?></td>
	<td class="style7"><?php  echo $data['precentage']; ?></td>
	<td class="style7"><?php  echo $data['prevcourse']; ?></td>
	<td class="style7"><?php  echo $data['status']; ?></td>
    <td class="style7"><a href="../admin/updateaddmissiuon2.php?admid=<?php  echo $data['admid']; ?>">approved</a></td>
  </tr>
  <span class="style7">
  <?php
 }
 }
 
}
?>
  </span>
</form>
<span class="style7">
</table>
</span>
<p>&nbsp;</p>
<p align="center" class="style4">&nbsp;</p>
<p>&nbsp;</p>
<p align="center">&nbsp;</p>
</body>
</html>

