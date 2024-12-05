<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
// Include the database connection file


include("../database/dbcon.php");

// Fetch data in descending order (lastest entry first)
$sql = "SELECT acadamic,course,name,precentage,prevcourse,status FROM addmission";
$query= $con->query($sql);
?>
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
<h1><p align="center" class="style4">View Student Addmission </p></h1>
<table width="1276" height="43" border="1" align="center">
  <tr>
    <td width="188">Addmission_id</td>
    <td width="206">Acadamic Year </td>
    <td width="94">Course</td>
    <td width="190">Student Name </td>
    <td width="142">Percentage</td>
    <td width="216">Previous Course </td>
    <td width="74">status</td>
  </tr>
  
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
			/*echo "<td>".$res['approve']."</td>";*/
			echo "</tr>";	
		}
		?>
</table>
<p align="center" class="style4">&nbsp;</p>
<p>&nbsp;</p>
<p align="center">&nbsp;</p>
<div align="center">
 <button type="button" class="btn btn-dark" onclick="myFunction()">Print Report</button>
</div>
<div align="center"></div>
</body>
</html>


<script type="text/javascript">
function myFunction() {
    var divToPrint = document.getElementById('rpt');
    var popupWin = window.open('', '_blank');
    popupWin.document.open();
    popupWin.document.write('<html><body onload="window.print()"><center><br><div style="color: #FFFFFF;font-family:Apple Chancery, cursive;text-shadow: #FFF 0px 0px 5px, #FFF 0px 0px 10px, #FFF 0px 0px 15px, #FF2D95 0px 0px 20px, #FF2D95 0px 0px 30px, #FF2D95 0px 0px 40px, #FF2D95 0px 0px 50px, #FF2D95 0px 0px 75px;font-style:italic;color: #FFFFFF;"><h1 align="center"><u> all admission Report</u></h1></div><h3><u>addmission Report</u></h3>' + divToPrint.innerHTML + '</center></body></html>');
    popupWin.document.close();
}
</script>