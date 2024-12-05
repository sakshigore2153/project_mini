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
.style25 {
	color: #000000;
	font-size: 16px;
}
.style26 {font-weight: bold}
.style27 {font-size: 24px}
.style28 {font-weight: bold}
.style30 {font-weight: bold}
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
<body>
<form action="log.php" method="POST">
   <p>&nbsp;</p>
      <p align="center" class="style39">Login......</p>
      <table width="382" border="1" align="center" bordercolor="#FFFFFF" bgcolor="#FFFFFF">
        <tr>
          <td width="142" height="60"><div align="center"><span class="Estilo31"><strong>Email</strong></span></div></td>
          <td width="224"><p>
              <input name="email" type="text"  placeholder="Enter Your Email Address"/>
          </p></td>
        </tr>
        <tr> &nbsp;
            <td height="58"><div align="center"><span class="Estilo31"><strong>Password</strong></span></div></td>
          <td><input name="password" type="password" placeholder="Must Enter 4 Digit Code"? />
            </td>
        </tr>
		<?php
         include('../database/dbcon.php');
       ?>
        <th><font color="black"> <span class="style27">
            <label><span class="style24">Cource</span></label>
          </span></font></th>
            <th><select name="coursename">
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
  </table>
      <table width="383" height="41" align="center" bordercolor="#0000FF" bgcolor="#FFFFFF">
      <tr>
        <td width="373" height="36"><div align="center">
            
          <input type="submit" name="submit" value="login"/>
        &nbsp;</div></td>
      </tr>
</table>    
      <table width="387" height="45" align="center" bordercolor="#0000FF" bgcolor="#FFFFFF">
      <tr>
        <td width="387" height="39" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center" class="style1 style26 style38">
            <div align="center"><strong><a href="regi.php" class="Estilo28  style41 style10 style25">New User? You Don't Have An Account..!</a></strong></div>
        </div></td>
      </tr>
</table>
      <p align="center" class="style28"><a href="logad.php">Admin Login..</a></p>
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
  $course = $_POST['course'];

 
  $n=0;
  $result=mysqli_query($con,"select * from regi") or die("record not find");
  while( $row=mysqli_fetch_array($result,MYSQLI_BOTH))
  {
    if($row['email']==$email && $row['password']==$password && $row['course']==$course) 
    {
  
		
	
		echo '<script>alert("Login Sucessfull")</script>';
        echo '<script>window.location.href = "sak.php";</script>';
    }
  }	
	
  	       echo '<script>alert("Invalid Details")</script>';
   			echo '<script>window.location.href="log.php";</script>'; 
    }
?>
