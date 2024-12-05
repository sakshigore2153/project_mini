
<!DOCTYPE>
<html>
<head>
<title>Payment Form</title>
    <style type="text/css">
<!--
.style4 {
	font-size: 18px;
	font-weight: bold;
	font-style: italic;
}
.style9 {
	font-weight: bold;
	font-size: 18px;
	font-style: italic;
}
.style10 {color: #660066}
-->
    </style>
</head>
  
<body>
<h1 align="center" class="style10"> Pay Fee</h1>
	<?php
include('../database/dbcon.php');
?>
	<form action="akanksha.php" name="priceCalc" method="POST">
	<tr >
<th><font color="black">
  <label>
  <div align="center"></div>
  </label>
  <div align="center">Cource:-
    <select name="select">
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
  </div>
  <label></label></th>
<th><p align="center">I Am Paying For :
  <select name="coursefee" onChange="price();">
    <option value="29,000.00">BCA - $29,000.00</option>
    <option value="3,500.00.00">B.COM - $3,500.00</option>
    <option value="20,000.00">BBA - $20,000.00</option>
    <option value="2,000.00">BA - $2,000.00</option>
    <option value="12,000.00">BSC - $12,000.00</option>
  </select>       
  <br />
      </p>
     <p align="center" class="style9">Name:-
        <input type="text" name="name" required="">
    </p>
      <p align="center" class="style4">Email:-
       <input type="email" name="email" id="email" value="" required="" />
    </p>
  <p align="center" class="style4">Aahar caed no:- 
       <input type="number" name="aadar" id="pincode" value="" required="" />
    </p>
    <h2 align="center" class="style4">Payment Information</h2>
    <p align="center" class="style4">Card Type:-
      <select name="card_type" id="card_type" required="">
        <option value="">---selecr a Card type--</option>
        <option value="visa">Visa</option>
        <option value="rupy">Rupay</option>
        <option value="master card">Master Card</option>        
      </select>    
    </p>
    <p align="center" class="style4">
      Card Number :-
        <input type="number" name="card_Number" id="Card Number" required="">
    </p>
    <p align="center" class="style4">
      Expiration Date:- 
        <input type="date" name="exp_date" id="exp_date" required="">
    </p>
    <p align="center" class="style4">
      CVV :- 
        <input type="password" name="CVV" id="CVV" required="">
    </p>
    <p align="center" class="style4">
      <input type="submit" name="submit" id="" value="Pay Now" />
      </p>
    </form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
include('../database/dbcon.php');

$coursename=$_POST['coursename'];
$coursefee=$_POST['coursefee'];
$name=$_POST['name'];
$aadar=$_POST['aadar'];
$card_type=$_POST['card_type'];
$card_Number=$_POST['card_Number'];
$exp_date=$_POST['exp_date'];
$CVV=$_POST['CVV'];

$qry="INSERT INTO `pay`(`coursename`,`coursefee`,`name`,`aadar`,`card_type`,`exp_date`,`CVV`) VALUES('$coursename','$coursefee','$name','$aadar','$card_type','$exp_date','$CVV')";
$run=mysqli_query($con,$qry);
if($run==true)
{
	echo '<script>alert("Payment Done Successfully...")</script>';
   echo '<script>window.location.href = "akanksha.php";</script>';
}
else
{
  echo '<script>alert("Payment Error...")</script>';
   echo '<script>window.location.href = "akanksha.php";</script>';
 }
 }
?>