<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
// Include the database connection file


include("../database/dbcon.php");

// Fetch data in descending order (lastest entry first)
$sql = "SELECT * FROM addmission where admid='25'";
 $query= $con->query($sql);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style30 {
	font-size: 18px;
	font-weight: bold;
}
.style31 {font-size: 18px}
.style32 {
	font-size: 24px;
	font-weight: bold;
	color: #FF0000;
}
.style33 {
	font-size: 24px;
	font-weight: bold;
	color: #000066;
}
.style34 {
	color: #FF0000;
	font-size: 24px;
}s
body {
	background-color: #99ccff;
}
.style35 {
	font-size: 36px;
	font-style: italic;
	color: #FF0000;
}
-->
</style>
</head>

<body><form  action="sak.php" method="post" >
  <div align="center"><span class="style35"><strong><strong><strong><strong><img src="../image/77.jpg" width="60" height="60" /></strong></strong></strong>Student Admission  </strong> <strong>form</strong></span>  </div>
  <table width="1198" height="1036" align="center" bordercolor="#CC0000" bgcolor="#F0F0F0">
  <tr>
    <td width="349" height="49"><span class="style32">Personal information</span></td>
    <td width="353"><span class="style30">Acadamic year:-
        <input type="text" name="acadmic" placeholder="enter your acadamic year" />
    </span></td>
    <td width="480"><span class="style31"><strong>select course</strong></span>*
      <select name="course">
      <option value="course">Course</option>
      <option value="BCA">BCA</option>
      <option value="BA">BA</option>
      <option value="B.com">B.com</option>
      <option value="Bsc">Bsc</option>
    </select></td>
  </tr>
  <tr>
    <td><span class="style31"><strong>Name:-
        <input type="text" name="name" placeholder="enter name" />
    </strong></span></td>
    <td><span class="style31"><strong> Father/HusbandName:-
        <input type="text" name="fname" placeholder="enter father name" />
    </strong></span></td>
    <td><span class="style31"><strong> SurnameName:-
        <input type="text" name="surname" placeholder="surname" />
    </strong></span></td>
  </tr>
  <tr>
    <td><span class="style31"><strong>Mobile no :-
        <input type="text" name="mno" placeholder="mobile no" />
    </strong></span></td>
    <td><span class="style31"><strong>Caste:-
        <input type="text" name="cast" placeholder="Cast" />
    </strong></span></td>
    <td><span class="style30">Religion:-
        <select name="religion" value="religion" class="form-control" id="religion_id" required="required" onchange="check_minority()">
          <option value="">Select Religion</option>
          <option  value="1">Hindu</option>
          <option  value="2">Islam</option>
          <option  value="3">Christian</option>
          <option  value="4">Sikh</option>
          <option  value="5">Buddhist</option>
          <option  value="6">Parsi</option>
          <option  value="7">Jain</option>
        </select>
    </span> <span class="style31"><strong><span class="style3"> </strong></span></td>
  </tr>
  <tr>
    <td><span class="style30">Category</span> <span class="col-md-3 style31"><strong>*
        <select name="category" value="category" class="form-control" id="caste_id" required="required" >
          <option value="">Select Category</option>
          <option  value="1">OPEN</option>
          <option  value="2">SC</option>
          <option  value="3">ST</option>
          <option  value="4">VJ/NT(A)</option>
          <option  value="5">NT(B)</option>
          <option  value="6">NT(C)</option>
          <option  value="7">NT(D)</option>
          <option  value="8">OBC</option>
          <option  value="9">SBC</option>
          <option  value="11">EWS</option>
          </select>
    </strong></span></td>
    <td><span class="style31"><strong><span class="col-md-3">
          <label for="exampleInputEmail1">Nationality</label>
      *</strong>
        <strong>
        <select name="nationality" class="form-control" id="nationality" required="required">
          <span class="required">*</span>
          <option  value="Indian">Indian</option>
          <option  value="Other">Other</option>
        </select>
        </strong></td>
    <td><span class="col-md-3 style31"><strong>
      <label for="exampleInputPassword1">College Last Attend:-</label>
      <select name="collagea" class="form-control" id="prev_clg_name" required="required">
         <option value="">Select Local Reservation</option> -->
        <option value="All">All</option>-->
        <option value="Same College">Same College</option>
        <option value="Other College">Other College</option>
      </select>
    </strong></span></td>
  </tr>
  <tr>
    <td><span class="col-md-3 style31"><strong>
      <label for="exampleInputPassword1">Mother Tounge</label>
      *
      <input type="text" class="form-control" name="mothert" id="mother_toung" placeholder="Mother Tounge" value="" />
    </strong></span></td>
    <td><span class="col-md-3 style31"><strong>
      <label for="exampleInputPassword1">Place of Birth</label>
      *
      <input type="text" class="form-control" name="placebirth" id="place_of_birth" placeholder="Place of Birth" required="required"  value="">
    </strong></span></td>
    <td><span class="col-md-3 style31"><strong>
      <label for="exampleInputPassword1">Date of Birth</label>
      *
      <input type="text" class="form-control" name="datebirth" id="place_of_birth2" placeholder="Place of Birth" required="required"  value="">
    </strong></span></td>
  </tr>
  <tr>
    <td><span class="style33">Student Bank Details</span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="col-md-3 style31"><strong>
      <label for="exampleInputPassword1">Name on Bank Passbook</label>
      <input type="text" class="form-control" name="bankpassbook" id="bank_passbook" placeholder="Name on Bank Passbook" value="" />
    </strong></span></td>
    <td><span class="col-md-2 style31"><strong>
      <label for="exampleInputPassword1">Bank Name</label>
      <input type="text" class="form-control" name="bankname" id="bank_name" placeholder="Bank Name" value="" />
    </strong></span></td>
    <td><span class="col-md-2 style31"><strong>
      <label for="exampleInputPassword1">Branch</label>
      <input type="text" class="form-control" name="branch" id="branch" placeholder="Branch" value="" />
    </strong></span></td>
  </tr>
  <tr>
    <td><span class="col-md-2 style31"><strong>
      <label for="exampleInputPassword1">Bank Account Number</label>
      <input type="text" class="form-control" name="accountno" id="account_no" placeholder="Bank Account Number" value=""  onkeypress="return isNumber(event)" />
    </strong></span></td>
    <td><span class="col-md-2 style31"><strong>
      <label for="exampleInputPassword1">Bank IFSC Code</label>
      <input type="text" class="form-control" name="ifscode" id="ifsc_code" placeholder="Bank IFSC Code" value="" />
    </strong></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
<hr/>
    <td><span class="style32">Parent Information </span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="col-md-3"><hr/>
        <span class="style31"><strong>
      <label for="exampleInputEmail1">Father's/Guardian's Full Name</label>
      :-
      <input type="text" class="form-control" name="fathern" id="account_no2" placeholder="Bank Account Number" value=""  onkeypress="return isNumber(event)" />
        </strong></span></span></td>
    <td><span class="col-md-3 style31"><strong>
      <label for="exampleInputEmail1">Mother's Full Name</label>
      *
      <input type="text" class="form-control" name="mothern" id="mother_full_name" placeholder="Mother's Full Name" value="" required="required" readonly="readonly" />
    </strong></span></td>
    <td><span class="col-md-3 style31"><strong>
      <label for="exampleInputEmail1">Annual Income</label>
      *
      <input type="text" class="form-control" name="annualincome" id="annual_income" placeholder="Annual Income"  value="" onkeypress="return isNumber(event)" required="required" />
    </strong></span></td>
  </tr>
  <tr>
    <td><span class="col-md-3 style31"><strong>
      <label for="exampleInputEmail1">Father's Occupation</label>
      <input type="text" class="form-control" name="foccupation" id="f_occupation" placeholder="Father's Occupation" value="">
    </strong></span></td>
    <td><span class="col-md-3 style31"><strong>
      <label for="exampleInputEmail1">Mothersr's Occupation</label>
      <input type="text" class="form-control" name="moccupation" id="f_occupation2" placeholder="Father's Occupation" value="">
    </strong></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="col-md-3 style31"><strong>
      <label for="exampleInputPassword1">Father's Mobile No.</label>
      *
      <input type="text" class="form-control" name="fno" id="f_phone" placeholder="Father's Mobile No." required="required" maxlength="10" minlength="10" onkeypress="return isNumber(event)"  value="">
    </strong></span></td>
	
    <td><span class="col-md-3 style31"><strong>
      <label for="exampleInputPassword1">Mother's Mobile No.</label>
      *
      <input type="text" class="form-control" name="mno1" id="f_phone2" placeholder="Father's Mobile No." required="required" maxlength="10" minlength="10" onkeypress="return isNumber(event)"  value="">
    </strong></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style30">Guardian's Info</span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="col-md-3 style31"><strong>
      <label for="exampleInputEmail1">Local Guardian's </label>
      <input type="text" class="form-control" name="localgurdain" id="local_gurdain" placeholder="Local Guardian's" value="" />
    </strong></span></td>

    <td><span class="col-md-3 style31"><strong>
      <label for="exampleInputEmail1">Guardian's Address</label>
      <input type="text" class="form-control" name="gurdainadd" id="gurdain_add" placeholder="Guardian's Address" value="" />
    </strong></span></td>
    <td><span class="col-md-3 style31"><strong>
      <label for="exampleInputEmail1">Guardian's Relationship</label>
      <input type="text" class="form-control" name="gurdainrelationship" id="gurdain_relationship" placeholder="Guardian's Relationship" value="" />
    </strong></span></td>
  </tr>
  <tr>
    <td><span class="style31"><strong><span class="col-md-2">
          <label for="exampleInputPassword1">Guardian's Mobile No.</label>
        <input type="text" class="form-control" name="gurdaino" id="gurdain_phone" placeholder="Guardian's Mobile No." maxlength="10" minlength="10" onkeypress="return isNumber(event)"  value="">
        </sspan>
    </strong></span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="col-md-2 style31"><strong>
      <label for="exampleInputPassword1"><span class="style34">Address Details</span></label>
    </strong></span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td><span class="col-md-12"><hr/>
        <span class="style31"><strong>
      <label for="exampleInputPassword1">Permenant Address</label>
      *</strong>
        <strong>
     <input type="textarea" height="150px" width="150px" name="peraddress"> </textarea>
        </strong></span></span></td>
		
    <td><span class="col-md-6 style31"><strong>
      <label for="exampleInputEmail1">Country</label>
      *
      <select name="percountry" class="form-control" id="per_country" required="required">
        <option   value="India">India</option>
        <option   value="Other">Other</option>
      </select>
    </strong></span></td>
    <td><span class="col-md-6 style31"><strong>
      <label for="exampleInputPassword1">State</label>
      *
      <select name="perstate" class="form-control" id="per_state_id" required="required">
        <option value="">Select State</option>
        <option  value="1">ANDHRA PRADESH</option>
        <option  value="2">ASSAM</option>
        <option  value="3">ARUNACHAL PRADESH</option>
        <option  value="4">BIHAR</option>
        <option  value="5">GUJRAT</option>
        <option  value="6">HARYANA</option>
        <option  value="7">HIMACHAL PRADESH</option>
        <option  value="8">JAMMU &amp; KASHMIR</option>
        <option  value="9">KARNATAKA</option>
        <option  value="10">KERALA</option>
        <option  value="11">MADHYA PRADESH</option>
        <option  value="12">MAHARASHTRA</option>
        <option  value="13">MANIPUR</option>
        <option  value="14">MEGHALAYA</option>
        <option  value="15">MIZORAM</option>
        <option  value="16">NAGALAND</option>
        <option  value="17">ORISSA</option>
        <option  value="18">PUNJAB</option>
        <option  value="19">RAJASTHAN</option>
        <option  value="20">SIKKIM</option>
        <option  value="21">TAMIL NADU</option>
        <option  value="22">TRIPURA</option>
        <option  value="23">UTTAR PRADESH</option>
        <option  value="24">WEST BENGAL</option>
        <option  value="25">DELHI</option>
        <option  value="26">GOA</option>
        <option  value="27">PONDICHERY</option>
        <option  value="28">LAKSHDWEEP</option>
        <option  value="29">DAMAN &amp; DIU</option>
        <option  value="30">DADRA &amp; NAGAR</option>
        <option  value="31">CHANDIGARH</option>
        <option  value="32">ANDAMAN &amp; NICOBAR</option>
        <option  value="33">UTTARANCHAL</option>
        <option  value="34">JHARKHAND</option>
        <option  value="35">CHATTISGARH</option>
      </select>
    </strong></span></td>
  </tr>
  <tr>
    <td><span class="col-md-6 style31"><strong>
      <label for="exampleInputPassword1">City/Village</label>
      *
      <input type="text" class="form-control" name="percity" id="per_city" placeholder="City/Village"  value="" required="required" />
    </strong></span></td>
    <td><span class="col-md-6 style31"><strong>
      <label for="exampleInputPassword1">Area</label>
      *
      <select name="perarea" class="form-control" id="perarea" required="required">
        <option value="">Select Area</option>
        <option  value="Urban">Urban</option>
        <option  value="Rural">Rural</option>
      </select>
    </strong></span></td>
    <td><span class="col-md-3 style31"><strong>
      <label for="exampleInputPassword1">Pin Code</label>
      *
      <input type="text" class="form-control" name="pincode" id="per_pin_code" placeholder="Pin Code" value=""  onkeypress="return isNumber(event)" required="required" />
    </strong></span></td>
  </tr>
  <tr>
    <td><span class="col-md-11 style31"><strong>
      <label for="exampleInputPassword1">Correspondence Address</label>
&nbsp;&nbsp;
<textarea class="form-control address" name="address" id="address" placeholder="Correspondence Address" > </textarea>
    </strong></span></td>
    <td><span class="col-md-6 style31"><strong>
      <label for="exampleInputEmail1"></label>
    </strong></span></td>
    <td><span class="col-md-5 style31"><strong>
      <label for="exampleInputPassword1"></label>
    </strong></span></td>
  </tr>
  <tr>
    <td><span class="col-md-6 style31"><strong>
      <label for="exampleInputPassword1"></label>
    </strong></span></td>
    <td><span class="col-md-5 style31"><strong>
      <label for="exampleInputPassword1"></label>
    </strong></span></td>
    <td><span class="col-md-3 style31"><strong>
      <label for="exampleInputPassword1"></label>
      <label for="exampleInputPassword1"></label>
    </strong></span></td>
  </tr>
  <tr>
    <td><span class="style32">Educational Qualification Details </span></td>
    <td><span class="style31"><strong><span class="box-title"><span style="color: red;">(Add SSC,HSC &amp; Last Year Qualification Details)</span></strong></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="col-md-4"><hr/>
        <span class="style31"><strong>
      <label for="exampleInputEmail1">Name of the Examination</label>
      *</strong>
        <strong>
        <input type="text" class="form-control" name="examname" id="exam_name" placeholder="Name of the Examination"  required="required" />
        </strong></span></span></td>
    <td><span class="col-md-4 style31"><strong>
      <label for="exampleInputEmail1">University/Board</label>
      *
      <input type="text" class="form-control" name="university" id="university" placeholder="University/Board"  required="required" />
    </strong></span></td>
    <td><span class="col-md-3 style31"><strong>
      <label for="exampleInputEmail1">Name of the Institute</label>
      *
      <input type="text" class="form-control" name="institutename1" id="institute_name" placeholder="Name of the Institute"  required="required" />
    </strong></span></td>
  </tr>
  <tr>
    <td><span class="col-md-2 style31"><strong>
      <label for="exampleInputPassword1">Month of Passing</label>
      *
      <select name="month" class="form-control" id="month" required="required">
        <option   value="January">January</option>
        <option   value="February">February</option>
        <option   value="March">March</option>
        <option   value="April">April</option>
        <option   value="May">May</option>
        <option   value="June">June</option>
        <option   value="July">July</option>
        <option   value="August">August</option>
        <option   value="September">September</option>
        <option   value="October">October</option>
        <option   value="November">November</option>
        <option   value="December">December</option>
      </select>
    </strong></span></td>
    <td><span class="col-md-2 style31"><strong>
      <label for="exampleInputPassword1">Year of Passing</label>
      *
      <select name="year" class="form-control" id="year" required="required">
        <option  value="1980">1980</option>
        <option  value="1981">1981</option>
        <option  value="1982">1982</option>
        <option  value="1983">1983</option>
        <option  value="1984">1984</option>
        <option  value="1985">1985</option>
        <option  value="1986">1986</option>
        <option  value="1987">1987</option>
        <option  value="1988">1988</option>
        <option  value="1989">1989</option>
        <option  value="1990">1990</option>
        <option  value="1991">1991</option>
        <option  value="1992">1992</option>
        <option  value="1993">1993</option>
        <option  value="1994">1994</option>
        <option  value="1995">1995</option>
        <option  value="1996">1996</option>
        <option  value="1997">1997</option>
        <option  value="1998">1998</option>
        <option  value="1999">1999</option>
        <option  value="2000">2000</option>
        <option  value="2001">2001</option>
        <option  value="2002">2002</option>
        <option  value="2003">2003</option>
        <option  value="2004">2004</option>
        <option  value="2005">2005</option>
        <option  value="2006">2006</option>
        <option  value="2007">2007</option>
        <option  value="2008">2008</option>
        <option  value="2009">2009</option>
        <option  value="2010">2010</option>
        <option  value="2011">2011</option>
        <option  value="2012">2012</option>
        <option  value="2013">2013</option>
        <option  value="2014">2014</option>
        <option  value="2015">2015</option>
        <option  value="2016">2016</option>
        <option  value="2017">2017</option>
        <option  value="2018">2018</option>
        <option  value="2019">2019</option>
        <option  value="2020">2020</option>
        <option  value="2021">2021</option>
        <option  value="2022">2022</option>
        <option  value="2023">2023</option>
      </select>
    </strong></span></td>
    <td><span class="col-md-4 style30 style31">
      <label for="exampleInputEmail1">Name of the Previous Class</label>
      *
      <input type="text" class="form-control" name="precentage" id="prev_clg_name2" placeholder="Name of the Previous Class" required="required" />
    </span></td>
  </tr>
  <tr>
    <td><span class="col-md-3 style31"><strong>
      <label for="exampleInputEmail1">Seat No.</label>
      *
      <input type="text" class="form-control" name="seatno" id="seat_no" placeholder="Seat No."  required="required" />
    </strong></span></td>
    <td><span class="col-md-3 style31"><strong>
      <label for="exampleInputEmail1">Mark System</label>
      *
      <select name="marksystem" class="form-control" id="mark_system" required="required">
        <option value="0">Select</option>
        <option  value="1">Marks</option>
        <option  value="2">Grade</option>
      </select>
    </strong></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style32">Last Year Exam &amp; Institute Informatio </span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="col-md-4"><hr/>
        <span class="style31"><strong>
      <label for="exampleInputEmail1">Last Attended Course</label>
      *</strong>
        <strong>
      <!-- <input type="text" class="form-control" name="prev_clg_name" id="prev_clg_name" placeholder="Last Attend Class" value="" required>-->
      <select name="prevcourse" class="form-control" id="prev_course" required="required">
        <option   value="SSC">SSC</option>
        <option   value="HSC">HSC</option>
        <option   value="Diploma">Diploma</option>
        <option   value="UG">UG</option>
      </select>
        </strong></span></span></td>
    <td><span class="col-md-4 style31"><strong>
      <label for="exampleInputEmail1">Course Name</label>
      *
      <input type="text" class="form-control" name="prevcoursename" id="prev_course_name" placeholder="Course Name" value="" required="required" />
    </strong></span></td>
    <td><span class="col-md-3 style31"><strong>
      <label for="exampleInputEmail1">Last Attend College/School Name</label>
      *
      <input type="text" class="form-control" name="institutename" id="institute_name2" placeholder="Last Attend Institute Name" value="" required="required" />
    </strong></span></td>
  </tr>
  <tr>
    <td><span class="col-md-4 style31"><strong>
      <label for="exampleInputEmail1">Name of University/Board</label>
      *
      <input type="text" class="form-control" name="university1" id="university2" placeholder="University/Board" value="" required="required" />
    </strong></span></td>
    <td><span class="col-md-2 style31"><strong>
      <label for="exampleInputPassword1">Month of Passing</label>
      *
      <select name="passingmontht" class="form-control" id="select" required="required">
        <option   value="January">January</option>
        <option   value="February">February</option>
        <option   value="March">March</option>
        <option   value="April">April</option>
        <option   value="May">May</option>
        <option   value="June">June</option>
        <option   value="July">July</option>
        <option   value="August">August</option>
        <option   value="September">September</option>
        <option   value="October">October</option>
        <option   value="November">November</option>
        <option   value="December">December</option>
      </select>
    </strong></span></td>
    <td><span class="col-md-2 style31"><strong>
      <label for="exampleInputPassword1">Year of Passing</label>
      *
      <select name="passingyear" class="form-control" id="select2" required="required">
        <option  value="2011">2011</option>
        <option  value="2012">2012</option>
        <option  value="2013">2013</option>
        <option  value="2014">2014</option>
        <option  value="2015">2015</option>
        <option  value="2016">2016</option>
        <option  value="2017">2017</option>
        <option  value="2018">2018</option>
        <option  value="2019">2019</option>
        <option  value="2020">2020</option>
        <option  value="2021">2021</option>
        <option  value="2022">2022</option>
        <option  value="2023">2023</option>
      </select>
    </strong></span></td>
  </tr>
  <tr>
    <td><span class="col-md-3 style31"><strong>
      <label for="exampleInputEmail1">Last Qualified Exam Seat No.</label>
      *
      <input type="text" class="form-control" name="seatno1" id="seat_no2" placeholder="Seat No." value="" required="required" />
    </strong></span></td>
    <td><span class="col-md-4 style31"><strong>
      <label for="exampleInputEmail1">State Of Residence</label>
      *
      <select name="residance" class="form-control" id="residance" required="required">
        <option  value="1">Maharashtra State</option>
        <option  value="2">Other State</option>
        <option  value="3">Foreigner</option>
      </select>
    </strong></span></td>
    <td><span class="col-md-4 style31"><strong>
      <label for="exampleInputPassword1">Examination Attempts</label>
      <select name="attempt" class="form-control" id="attempt" required="required">
        <option  value="1">1st</option>
        <option  value="2">2nd</option>
        <option  value="3">3rd</option>
        <option  value="4">4th</option>
      </select>
    </strong></span></td>
  </tr>
  <tr>
    <td><span class="col-md-3 style31"><strong>
      <label for="exampleInputEmail1">Mark System</label>
      *
      <select name="marksystem1" class="form-control" id="select3" required="required">
        <option value="0">Select</option>
        <option  value="1">Marks</option>
        <option  value="2">Grade</option>
      </select>
    </strong></span></td>
    <td><span class="col-md-4 style31"><strong>
      <label for="exampleInputPassword1">UDIAS No.(Applicable for Jr. College)</label>
      <input type="text" class="form-control" name="udias" id="udias" placeholder="UDIAS No."  value="" />
    </strong></span></td>
    <td><span class="col-md-3 style31"><strong>
      <label for="exampleInputPassword1">Eligibility No.(Applicable for Sr. College)</label>
      <input type="text" class="form-control" name="eligibility" id="eligibility_no" placeholder="Eligibility No."  value="" />
    </strong></span></td>
  </tr>
  <tr>
    <td><span class="col-md-4 style31"><strong>
      <label for="exampleInputPassword1">PRN No.(Applicable for Sr. College)</label>
      <input type="text" class="form-control" name="prnno" id="prn_no" placeholder="PRN No." value="" />
    </strong></span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><label>
      <div align="center">
        <input name="submit" type="submit" class="style33" value="Submit" />
        </div>
    </label></td>
    <td>&nbsp;</td>
  <?php
		// Fetch the next row of a result set as an associative array
		$i=0;
		while ($res = $query->fetch_assoc()) {
		    echo "<tr>";
			echo" <td >".++$i."</td>";
			echo "<td>".$res['acadamic']."</td>";
			echo "<td>".$res['course']."</td>";
			echo "<td>".$res['name']."</td>";
			echo "<td>".$res['fname']."</td>";
			echo "<td>".$res['surname']."</td>";
			echo "<td>".$res['mno']."</td>";
			echo "<td>".$res['cast']."</td>";
			echo "<td>".$res['religion']."</td>";
			echo "<td>".$res['category']."</td>";
			echo "<td>".$res['nationality']."</td>";
			echo "<td>".$res['collagea']."</td>";
			echo "<td>".$res['mothert']."</td>";
			echo "<td>".$res['placebirth']."</td>";
			echo "<td>".$res['datebirth']."</td>";
			echo "<td>".$res['bankpassbook']."</td>";
			echo "<td>".$res['bankname']."</td>";
			echo "<td>".$res['branch']."</td>";
			echo "<td>".$res['accountno']."</td>";
			echo "<td>".$res['ifscode']."</td>";
			echo "<td>".$res['fathern']."</td>";
			echo "<td>".$res['annualincome']."</td>";
			echo "<td>".$res['foccupation']."</td>";
			echo "<td>".$res['moccupation']."</td>";
			echo "<td>".$res['fno']."</td>";
			echo "<td>".$res['mno1']."</td>";
			echo "<td>".$res['localgurdain']."</td>";
			echo "<td>".$res['gurdainadd']."</td>";
			echo "<td>".$res['gurdainrelationship']."</td>";
			echo "<td>".$res['gurdaino']."</td>";
			echo "<td>".$res['peraddress']."</td>";
			echo "<td>".$res['percountry']."</td>";
			echo "<td>".$res['perstate']."</td>";
			echo "<td>".$res['percity']."</td>";
			echo "<td>".$res['perarea']."</td>";
			echo "<td>".$res['perpincode']."</td>";
			echo "<td>".$res['address']."</td>";
			echo "<td>".$res['examname']."</td>";
			echo "<td>".$res['university']."</td>";
			echo "<td>".$res['institutename1']."</td>";
			echo "<td>".$res['month']."</td>";
			echo "<td>".$res['year']."</td>";
			echo "<td>".$res['precentage']."</td>";
			echo "<td>".$res['seatno']."</td>";
			echo "<td>".$res['marksystem']."</td>";
			echo "<td>".$res['prevcourse']."</td>";
			echo "<td>".$res['institutename']."</td>";
			echo "<td>".$res['university1']."</td>";
			echo "<td>".$res['passingmonth']."</td>";
			echo "<td>".$res['passingyear']."</td>";
			echo "<td>".$res['seatno1']."</td>";
			echo "<td>".$res['residance']."</td>";
			echo "<td>".$res['attempt']."</td>";
			echo "<td>".$res['marksystem1']."</td>";
			echo "<td>".$res['udias']."</td>";
			echo "<td>".$res['eligibility']."</td>";
			echo "<td>".$res['prnno']."</td>";
			echo "<td>".$res['status']."</td>";
			echo "</tr>";	
		}
		?>
		</tr>
</table>
</form>
</body>
</html>

