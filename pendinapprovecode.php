<?php
// Include the database connection file


include("dbcon.php");

// Fetch data in descending order (lastest entry first)
$sql = "SELECT * FROM ground ORDER BY rid DESC";
 $query= $con->query($sql)
?>

<html>
<head>	
	
<style type="text/css">
<!--
.style1 {font-size: 24px}
.style2 {

	font-weight: bold;
	.style3 {font-size: 18px; font-weight: bold; }

.style3 {font-size: 18px; font-weight: bold; }
.style4 {font-size: 24px}

}

body{
	background-position:center;
	background-repeat:no-repeat;
	background-color: #FFCCFF;
}

-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>

<body>

<div align="center">
		<h1>List Of Customer</h1>
	  <p>&nbsp;</p>
	 
	  <table width='50%' border="1" cellspacing="0">
	    <tr bgcolor=>
	      <td height="46"><div align="center"><span>Sr. No.</span></div></td>
		    <td><div align="center"><span>time</span></div></td>
			<td><div align="center"><span>start</span></div></td>
			<td><div align="center"><span>end</span></div></td>
						


		   		
		</tr>
	    <?php
		//Fetch the next row of a result set as an associative array
		$i=0;
		while ($res = $query->fetch_assoc()) {
			echo "<tr>";
			echo" <td >".++$i."</td>";
			echo "<td>".$res['time']."</td>";	
		
			echo "<td>".$res['start']."</td>";	
			echo "<td>".$res['end']."</td>";	
			
			echo "<td>Approve</a> | 
			<a href=\"disapprove.php?rid=$res[rid]\" onClick=\"return confirm('Are you sure you want to disapprove the request?')\">Disapprove</a></td>";
		
			
			
		}
		?>
      </table>
</div>
</body>
</html>
