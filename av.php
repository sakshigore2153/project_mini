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
.style26 {font-size: 16px}
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
    <td width="117"><div align="center"><em><span class="style24"><a href="teach.php">Abouts teacher</a></span> 
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
          <option value="4">B.com</option>
        </select>
      </div>
    </div>	</td>
  </tr>
</table>

<body><form action="logad.php" method="POST">
  <body>
<p>&nbsp;</p>
      <table width="382" border="1" align="center" bordercolor="#FFFFFF" bgcolor="#FFFFFF">
        <tr>
          <td width="142" height="60"><div align="center"><span class="Estilo31">Email</span></div></td>
          <td width="224"><input name="email" type="text"  placeholder="Enter Your Email Address"/>
          &nbsp;</td>
        </tr>
        <tr>
          <td height="58"><div align="center"><span class="Estilo31">Password</span></div></td>
          <td><input name="password" type="password" placeholder="Must Enter 6 Digit Code"/>
            &nbsp;</td>
        </tr>
  </table>      
      <table width="77" height="41" border="1" align="center" bordercolor="#FFFFFF" bgcolor="#FFFFFF">
      <tr>
        <td width="122" height="36"><div align="center">
            
          <input type="submit" name="submit" value="login" />
          &nbsp;</div></td>
      </tr>
  </table>    
      <table width="462" height="45" border="1" align="center" bordercolor="#0000FF" bgcolor="#FFFFFF">
      <tr>
        <td width="452" height="39" bordercolor="#CCCCCC" bgcolor="#FFFFFF"><div align="center" class="style1 style26">
            <div align="center"><strong><a href="regi.php" class="Estilo28 style26">New User? You Don't Have An Account..!</a></strong></div>
        </div></td>
      </tr>
  </table>
      <p align="center" class="style28"><a href="logad.php">Admin Login..</a></p>
      <p>&nbsp;</p>
    <p>&nbsp;</p></td>
  </tr>
</table>
<p>&nbsp;</p>
</form>
</body>
</html>

<?php
include('../database/dbcon.php');
 
 if(isset($_POST['submit']))
 {  
  $email = $_POST['email'];	
  $password = $_POST['password'];
}
 
  if(admin = $email && admin == $password)

{

echo '<script> alert("Login Sucessfu II")</script>';

echo '<script>window.location. href= "admindash.php";</script>';

}

}

echo '<script> alert("Invalid Details")</script>';

echo '<script>window.location.href="av.php";</script>';

}

?>