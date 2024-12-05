<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Registration form 2023</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<style type="text/css">
	@page { size: auto;  margin: 10mm; margin-right: -70px; margin-left: -70px;}
@media print {
    a[href]:after {
        content: none !important;
    }
}
@media print {
        #printbtn {
        display: none !important;
    }
    .main-heading
    {
      font-size:30px !important;
    }

    .underline{
line-height: 27px !important;
 text-decoration-style: dotted !important;
}
}


.style19 {
	font-size: 36px;
	font-weight: bold;
	color: #000000;
}
.style10 {font-size: 18px}
.style21 {
	font-size: 24px;
	font-weight: bold;
	color: #000000;
}
.style22 {color: #000000}
.style8 {	color: #FFFFFF;
	font-weight: bold;
	font-style: italic;
}
.style23 {color: #FF0000}
body {
	background-color: #99CCFF;
}
.style24 {color: #FFFFFF}
.style28 {color: #000000; font-weight: bold; }
.style29 {font-weight: bold}
.style30 {font-weight: bold}
.style47 {font-weight: bold}
.style48 {font-weight: bold}
.style54 {color: #FF0000; font-size: 36px; }
.style55 {color: #FF0000; font-size: 24px; }
.style56 {font-size: 24px; }
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
<div class="container-fluid">
<?php 

include('../database/dbcon.php');
         $sql="SELECT * from addmission WHERE name='samiksha'"; 
          $query= $con->query($sql);

			$row = $query->fetch_assoc()
    	 ?> 
         <div class="row">
          <div class="col-2">
              <td width="152" height="153"><img src="../image/41.png" width="153" height="149"  class="img-fluid">          </div>
           <div class="col">
              <div class="main-heading"><span class="style19">NEW MODERN COLLEGE</span></div>
     <p class="sub-heading"><span class="style21">Rayat Shikshan Sanstha's<span class="style10">(NAAC Accrediated by &quot;A+&quot; Grade)</span></span></p>
      <div class="address"></div>
         <p class="email"> <span class="style22">Email:<a href=" mailto:@morden12.gemail.com">:-</a></span><a href=" mailto:@morden12.gemail.com">@morden12.gemail.com</a>, <span class="style22">Phone no:-:</span> <span class="style8"><a href="tel:+919356766254">919356766254</a></span><a href="tel:+919356766254"></p>
          </div>
          <div class="col-sm-12">
            <hr class="hrcls"> 
          </div>
      </div>
      <div class="row">
  <p id="message"></p>
  <div class="col-sm-2">  </div>
  <div class="col-sm-8" style="text-align: center;padding-bottom: 5px;">
   <h3 class="style22"> <u>Student Status</u></h3>
  </div>
  <div class="col-sm-2">  </div>
  </div>

<div class="row">
    <div class="col-6">
      <div class="form-group row">
   <div class="col-4"> <span class="style23">
     <span class="style24">
     <span class="style22">     </span></span></span><span class="style23">
     <label class="lable">     </label>
     <label class="lable"></label>
     <label class="lable"></label>
     </span>
     <label class="lable"><div align="center">
       <div align="left" class="style22 style22">
         <div align="left"><span class="style28 style22">Course Name</span></div>
       </div>
     </div>
     <div align="left"><span class="style28">
       </label>
     </span></div>
   </div>
     <div class="col-8 style22 style29">
       <div align="left"><?php echo $row['course']; ?> </div>
     </div>
    </div>

      <div class="form-group row style22 style30">
   <div class="col-4">

      <label class="lable">
      <div align="left">Student Name
        </label>
      </div>
   </div>
     <div class="col-8">
       <div align="left"><?php echo $row['name']; ?>    </div>
     </div>
    </div>
	<div class="form-group row style22 style47">
   <div class="col-4">

      <label class="lable">
      <div align="left">previous coursec percentage</div>
      </label>
    </div>
     <div class="col-8">
       <div align="left"><?php echo $row['precentage']; ?>    </div>
     </div>
    </div>
    
	<div class="form-group row style22 style47">
   <div class="col-4">

      <label class="lable">
      <div align="center" class="style55">
        <div align="left">Student status
          </label>
        </div>
      </div>
   </div>
     <div class="col-8">
       <div align="left"><span class="style55"><?php echo $row['status']; ?></span> </div>
     </div>
    </div>
	<div class="form-group row style22 style48">
   <div class="col-4">

      <label class="lable">
      <div align="left" class="style55"></div>
      </div>
     <div class="col-8"></div>
    </div>
    </div>
    

    <div align="left" class="style28">
      <div align="left"><span class="style22">
        <!-- Row 4 end --> 
      </span></div>
    </div>
</div>
 
<div class="style22 col-2">  </div>
</div>
<div align="left" class="style28"></div>
<div align="left">
<p class="style22"></div>
    </strong></p>
  <p align="center" class="style54"><a href="pay.php"></a></p>
</div>
<div align="center" class="style56"><a href="pay.php"></a></div>
</body>
</html>