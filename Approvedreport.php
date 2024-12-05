<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {	font-size: 36px;
	font-weight: bold;
	color: #000066;
}
.style4 {
	color: #FFFFFF;
	font-weight: bold;
}
body {
	background-color: #b3daff;
}
.style6 {font-size: 24px; font-weight: bold; color: #FFFFFF; }
.style7 {
	font-size: 24px;
	font-weight: bold;
}
.style9 {font-size: 18px; font-weight: bold; }
-->
</style>
</head>

<body>
<div align="center"><span class="style1">Admindash Board</span></div>
<h1 align="center"><img src="../image/ad2.jpg" width="1134" height="284" /></h1>
<table width="1110" border="1" align="center" bordercolor="#FFFFFF" bgcolor="#FF99CC">
  <tr>
    <td width="544"><div align="center"><span class="style6"><a href="admindash.php">Student Details </a></span></div></td>
    <td width="550"><div align="center" class="style6"><a href="coursedetails.php">Course Details </a></div></td>
  </tr>
</table>
<table width="1142" align="center">
  <tr>
    <td width="350"><div align="center" class="style7"><a href="../user/logad.php">Login</a></div></td>
    <td width="424"><div align="center"><span class="style9">Courses Vise Student Report</span></div></td>
    <td width="346"> <div align="center" class="style7"><a href="../user/index.php">Logout </a></div></td>
  </tr>
</table>
<table width="1201" border="1" align="center" bordercolor="#FFFFFF" bgcolor="#FF99CC">
  <tr>
    <td bordercolor="#660000" bgcolor="#FF99CC"> <div align="center" class="style4"><a href="bcareport.php">BCA Student </a></div></td>
    <td bordercolor="#660000" bgcolor="#FF99CC"><div align="center" class="style4"><a href="bcomreport.php">B.COM Student</a> </div></td>
    <td bordercolor="#660000" bgcolor="#FF99CC"><div align="center" class="style4"><a href="bareport.php">BA Student </a></div></td>
    <td bordercolor="#660000" bgcolor="#FF99CC"><div align="center" class="style4"><a href="bscreport.php">BSC Student </a></div></td>
    <td bordercolor="#660000" bgcolor="#FF99CC"><div align="center" class="style4"><a href="bbareport.php">BBA Student </a></div></td>
    <td bordercolor="#660000" bgcolor="#FF99CC"><div align="center" class="style4"><a href="Approvedreport.php">Approved Student </a></div></td>
    <td bordercolor="#660000" bgcolor="#FF99CC"><div align="center" class="style4"><a href="pendingreport.php">Pending Student </a></div></td>
  </tr>
</table>
<p align="center">&nbsp;</p>
</body>
</html>
<h2><b><p align="center" class="style2">Approved Student Report </p></b></h2>
<?php
include("../database/dbcon.php");

// Fetch data in descending order (lastest entry first)
$sql = "SELECT acadamic,course,name,precentage,prevcourse,status FROM addmission where status='Approved'";
$query= $con->query($sql);
$con->close();
?>
<table width="1140" border="1" align="center" bordercolor="#FFFFFF" bgcolor="#CCCCCC">
  <tr>
    <td width="129" height="36"><div align="center" class="style46">Admission ID  </div></td>
    <td width="149"><div align="center" class="style47"><span class="Estilo15 style15"><strong><span class="style15 style37"> Acadamic Year </span></strong></span></div></td>
	  <td width="158"><div align="center" class="style47"><span class="Estilo15 style15"><strong><span class="style15 style37">Student Course</span></strong></span></div></td>
    <td width="158"><div align="center" class="style47"><span class="Estilo15 style15"><strong><span class="style15 style37"> Student Name </span></strong></span></div></td>
    <td width="169"><div align="center" class="style47"><span class="Estilo15 style15"><strong><span class="style15 style37">Student Percentage </span></strong></span></div></td>
    <td width="214"><p align="center" class="style47"><strong>Student previous Course </strong></p>
    <p align="center" class="style47">&nbsp;</p></td>
    <td width="130"><div align="center" class="style47"><strong> Student Status </strong></div></td>
  </tr>
  <tr>
    <?php
		// Fetch the next row of a result set as an associative array
		$i=0;
		while ($res = $query->fetch_assoc()) {
		    echo "<tr>";
			echo" <td >".++$i."</td>";
			echo "<td>".$res['acadamic']."</td>";
			echo "<td>".$res['course']."</td>";
			echo "<td>".$res['name']."</td>";
			echo "<td>".$res['precentage']."</td>";
			echo "<td>".$res['prevcourse']."</td>";
			echo "<td>".$res['status']."</td>";
			echo "</tr>";	
		}
		?>
  </tr>
</table>
<p align="center">&nbsp;</p>
<p>&nbsp;</p>
<p align="center" class="style2">&nbsp;</p>
<p>&nbsp;</p>
<p align="center">&nbsp;</p>
</form>
</body>
</html>


