<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
.style37 {color: #000000; font-size: 24px; }
.style38 {font-size: 24px}
.style39 {font-weight: bold; font-style: italic;}
-->
</style></head>
<?php
include('../database/dbcon.php');
$admid=$_GET['admid'];


$sql="UPDATE `addmission` SET `status`= 'Approved' WHERE `admid` = '$admid';";


if($con->query($sql))
        {
            echo    '<script type="text/javascript">
                    alert ("your Application has Approved!!");
                    window.location="updataddmission1.php";
                    </script>';
        }
        else
        {
            echo    '<script type="text/javascript">
            alert ("Record Not Update");
            window.location="updataddmission1.php?admid=$admid";
            </script>';
        }




/*$sql="SELECT * FROM `addmission` WHERE `admid`='$admid'";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);*/
?>

<!--<title>Admindash Boprd</title>

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
<body>
<form action="add_demo.php" method="POST" enctype="multipart/form-data">
<p align="center" class="style4">Approved Addmission </p>
<table width="689" border="1" align="center" bordercolor="#FFFFFF" bgcolor="#CCCCCC">
  <tr>
    <td width="332" height="45"><div align="center" class="style37">
      <div align="center"><strong>Student Acadamic Year </strong></div>
    </div></td>
    <td width="341"><div align="left">
      <input type="text" name="acadamic" value="<?php//echo $data['acadamic']; ?>" />
    </div></td>
  </tr>
  <tr>
    <td width="332" height="45"><div align="center" class="style4 style37 style38">
      <div align="center">Select Course </div>
    </div></td>
    <td width="341"><div align="left">
      <input type="text" name="course" value="<?php// echo $data['course'];?>" />
</div></td>
  </tr>
  <tr>
    <td height="41"><div align="center" class="Estilo13 style38">
      <div align="left" class="style39">
        <div align="center">Student Name </div>
      </div>
    </div></td>
    <td><label>
      <input type="text" name="name" value="<?php// echo $data['name'];?>" />
    </label></td>
  </tr>
  <tr>
    <td height="41"><div align="center" class="style38"><em><strong>Student Percentage </strong></em></div></td>
    <td><input type="text" name="precentage" value="<?php// echo $data['precentage']; ?>" /></td>
  </tr>
  <tr>
    <td height="41"><div align="center" class="style38"><em><strong>Student Privious course </strong></em></div></td>
    <td><input type="text" name="prevcourse" value="<?php// echo $data['prevcourse']; ?>" /></td>
  </tr>
  <tr>
    <td height="41"><div align="center" class="style2">Student Status </div></td>
    <td><input type="text" name="status" value="<?php// echo $data['status']; ?>" /></td>
  </tr>
</table>
<table width="64" border="1" align="center" bgcolor="#FFFFFF">
  <tr>
    <input type="hidden" name="id" value="<?php// echo $data['admid'];?>" />
    <td width="54"><input name="submit" type="submit" id="submit" value="submit" required="required" /></td>
  </tr>
</table>
<p align="center" class="style4">&nbsp;</p>
<p>&nbsp;</p>
<p align="center">&nbsp;</p>
</form>
</body>
</html>
-->