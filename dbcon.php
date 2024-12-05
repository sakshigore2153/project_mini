<?php
$con=mysqli_connect('localhost','root','','collagedb');
if ($con==true)
{
echo "connection is done sucessfully";
}
if ($con==false)
{
echo "connection is  not done";
}

?>