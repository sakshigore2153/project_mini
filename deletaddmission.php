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
.style37 {color: #000000}
.style4 {	font-size: 36px;
	font-weight: bold;
}
.style5 {color: #000000; font-size: 24px; }
.style38 {font-size: 24px}
.style39 {font-weight: bold; font-style: italic;}
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
<p align="center" class="style2">Disapproved Admission </p>
<table border="1" align="center" bordercolor="#FFFFFF" bgcolor="#CCCCCC">
  <tr>
    <th><div align="center" class="style7 style14 style6 style4 style37">Course Name </div></th>
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
	  <?php
	  }
 } 
}
?>
</td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="689" border="1" align="center" bordercolor="#FFFFFF" bgcolor="#CCCCCC">
  <tr>
    <td width="332" height="45"><div align="center" class="style5">
      <div align="center"><strong>Student Acadamic Year </strong></div>
    </div></td>
    <td width="341"><div align="left">
      <input type="text" name="acadamic" value="<?php echo $data['acadamic']; ?>" />
    </div></td>
  </tr>
  <tr>
    <td width="332" height="45"><div align="center" class="style4 style37 style38">
      <div align="center">Select Course </div>
    </div></td>
    <td width="341"><div align="left">
      <input type="text" name="course" value="<?php echo $data['course'];?>" />
    </div></td>
  </tr>
  <tr>
    <td height="41"><div align="center" class="Estilo13 style38">
      <div align="left" class="style39">
        <div align="center">Student Name </div>
      </div>
    </div></td>
    <td><label>
      <input type="text" name="name" value="<?php echo $data['name'];?>" />
    </label></td>
  </tr>
  <tr>
    <td height="41"><div align="center" class="style38"><em><strong>Student Percentage </strong></em></div></td>
    <td><input type="text" name="precentage" value="<?php echo $data['precentage']; ?>" /></td>
  </tr>
  <tr>
    <td height="41"><div align="center" class="style38"><em><strong>Student Privious course </strong></em></div></td>
    <td><input type="text" name="prevcourse" value="<?php echo $data['prevcourse']; ?>" /></td>
  </tr>
  <tr>
    <td height="41"><div align="center" class="style2">Student Status </div></td>
    <td><input type="text" name="status" value="<?php echo $data['status']; ?>" /></td>
  </tr>
</table>
<p align="center"><input name="submit2" type="submit" id="submit" value="submit" required="required" />
</p>
<p>&nbsp;</p>
<p align="center" class="style2">&nbsp;</p>
<p>&nbsp;</p>
<p align="center">&nbsp;</p>
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