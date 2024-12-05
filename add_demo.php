<?php
if(isset($_POST['submit']))
{
include('../database/dbcon.php');
$admid=$_POST['id'];
$acadamic=$_POST['acadamic'];
$course=$_POST['course'];
$name=$_POST['name'];
$precentage=$_POST['precentage'];
$prevcourse=$_POST['prevcourse'];
$status=$_POST['status'];


$sql="UPDATE `addmission` SET `acadamic` = '$acadamic',`course`= '$course',`name`= '$name',`precentage`= '$precentage',`prevcourse`= '$prevcourse',`status`= '$status' WHERE `admid` = '$admid';";


if($con->query($sql))
        {
            echo    '<script type="text/javascript">
                    alert ("Record Updated!!");
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
}

?>
