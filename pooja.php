<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-style: italic;
	font-weight: bold;
	color: #0066CC;
}
body {
	background-color: #99CCFF;
}
.style8 {
	color: #FFFFFF;
	font-weight: bold;
	font-style: italic;
}
.style10 {font-size: 18px}
.style14 {color: #000000; font-style: italic; font-weight: bold; font-size: 18px; }
.style16 {color: #990066}
.style18 {font-size: 24px; font-style: italic;}
.style19 {
	font-size: 36px;
	font-weight: bold;
}
.style21 {font-size: 24px; font-weight: bold; }
.style22 {
	color: #000000;
	font-style: italic;
}
.style24 {font-size: 18px; font-weight: bold; }
-->
</style>
</head>

<body>
<table width="1345" border="1" bgcolor="#000066">
  <tr>
    <td width="410" height="25"><div align="center"><span class="style8"><span class="style10">Phone no</span><a href="tel:+919356766254">:-919356766254</a></span><a href="tel:+919356766254"></div></td>
    <td width="506"><div align="center"><span class="style8"><span class="style10">Email</span><a href=" mailto:@morden12.gemail.com">:-@morden12.gemail.com</a></span></div></td>
    <td width="407"><div align="center"><span class="style8">Contact now </span></div></td>
  </tr>
</table>
<span class="style16">
</span>
<table width="150" height="176" align="right">
  <tr>
    <td width="142" height="170"><div align="left"><img src="../image/annaa.jpg" width="141" height="159" /></div></td>
  </tr>
</table>
<table width="1171" height="159">
  <tr>
    <td width="152" height="153"><img src="../image/41.png" width="153" height="149" /></td>
    <td width="1011"><div align="center" class="style18">
    <p class="style21">Rayat Shikshan Sanstha's<span class="style10">(NAAC Accrediated by &quot;A+&quot; Grade)</span></p>
	<p class="style21"><span class="style19">NEW MODERN COLLEGE</span><strong> of Arts, Science and Commerce </strong></p>
	</div></td>
  </tr>
</table>
<table width="1181" align="center" bordercolor="#FFFFFF" bgcolor="#99CCFF">
  <tr>
    <td width="125"><div align="center" class="style14 style10 style22"><a href="index.php">Home </a></div></td>
    <td width="106"><div align="center" class="style14"><a href="aboutus.php">About us</a></div></td>
    <td width="138"><div align="center" class="style14"><a href="contact.php">contact us</a></div></td>
    <td width="144"><div align="center" class="style14"><a href="notice.php">college notice </a></div></td>
    <td width="117"><div align="center"><em><span class="style24"><a href="teach.php">About teacher</a></span> 
      <div class="dropdown"></div>
    <td width="133"><div align="center" class="style14"> <a href="acadamic.php">Addmission</a></div></td>
    <td width="128"><div align="center" class="style14"> <a href="merit.php">merit list</a> </div></td>
    <td width="144"><div align="center" class="style14"><span class="style30">
    <select name="select2" class="form-control" id="select2" required="required" onchange="check_minority()">
      <option value="Course"><b>Facilities</b></option>
      <option  value="1">Hostel</option>
      <option  value="2">canteen</option>
      <option  value="3">libaray</option>
      <option value="">computer lab </option>
      <option value="">Gym </option>
      <option value="">Sport Ground </option>
    </select>
    </span></div></td>
    <td width="106"><div align="center" class="style14">
      <div class="dropdown"> <span class="style30">
        <select name="Course" class="form-control" id="religion_id" required="required" onchange="check_minority()">
          <option value="Course"><b>Course</b></option>
          <option  value="1">BBA</option>
          <option  value="2">BCA</option>
          <option  value="3">BSC</option>
          <option value="">B.com</option>

        </select>
      </div>
    </div>	</td>
  </tr>
</table>

<body bgcolor="#99CCFF">
<html>
<head><body background="img/02.jpg">
<p>&nbsp;</p>
<form action="regi.php" method="post" >
<?php include_once('includes/sak.php');?></div>
	 <?php


include('../database/dbcon.php');
$r_id = $_GET['r_id'];
$Record = mysqli_query($con,"SELECT * FROM `halls` WHERE r_id = $r_id");
$data = mysqli_fetch_array($Record);

?>
  <table width="38%" height="497" border="1" align="center" bordercolor="#333333" bgcolor="#FFFFFF">
<!---row1--->
<tr align="center" bgcolor="#FFFFFF">
<th height="57" colspan="2"><font color="#000066" size="+7">Registration form </font></th>
</tr>

<!---row2--->
<tr>
<th>Full<font color="black">
  <label>Name</label></th>
<th><label>
  <input type="text" name="name" Placeholder="Enter First or Lastname.."  />
</label></th>
</tr>
<tr>
<th><font color="black">
  <label>Address</label></th>
<th><input type="textarea"  name="address" cols="30" rows="2"  placeholder="Enter Your Addressss">  
    </textarea></th>
</tr>
<!---row4--->
<tr >
<th><font color="black">
<label>Mobile No.</label></th>
<th> <input type="number" name="number"  placeholder="Enter mobile no.." pattern=".{10,}" title=" enter a 10 digit number"/></th>
</tr>
<!---row5--->
<tr >
<th><font color="black">
<label>Email</label></th>
<th> <input type="email" name="email" placeholder="Enter email.."/></th>
</tr>
<!---row7--->
<tr >
<th><font color="black">
<label>City</label></th>
<th>
<select name="city">
<option value="A.nagar">India</option>
<option value="pune">South Africa</option>
<option value="Mumbai">America</option>
<option value="satara">Japan</option>
</th>
</tr>
<?php
include('../database/dbcon.php');
?>
<tr >
<th><font color="black">
<label>Course</label></th>
<th>
     <select name="course">
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
    }}
    ?>
    </select>
</th>
</tr>
<tr>
<th><font color="black">
  <label> Password </label></th>
<th> <input type="password"  name="password" placeholder="  must enter 4 digit" pattern=".{4,}" title="four number"> </th>
</tr>
<tr>
<th><font color="black">
  <label> confirm Password</label></th>
<th> <input type="password" name="confirmpassword" placeholder="enter 4 digit" pattern=".{4,}" title="four number"></th>
</tr>
<!---row8--->
<tr align="center" bgcolor="#FFFFFF">
<th colspan="2"><font color="#FFFFFF">
  <label>
  <input type="submit" name="submit" value="submit" />
  </label>
  <input type="reset">
</font></th>
</tr>
</table>
<p align="center" class="style23"><a href="info.php"></a></p>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
include('../database/dbcon.php');

$name=$_POST['name'];
$address=$_POST['address'];
$number=$_POST['number'];
$email=$_POST['email'];
$city=$_POST['city'];
$course=$_POST['course'];
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];

$qry="INSERT INTO `regi`(`name`,`address`,`number`,`email`,`city`,`course`,`password`,`confirmpassword`) VALUES('$name','$address','$number','$email','$city','$course','$password','$confirmpassword')";
$run=mysqli_query($con,$qry);
if($run==true)
{
   
	echo '<script>alert("Registration Done Successfully...")</script>';
   echo '<script>window.location.href = "log.php";</script>';
}
else
{
  echo '<script>alert("Registration Error...")</script>';
   echo '<script>window.location.href = "log.php";</script>';
 }
 }
?>