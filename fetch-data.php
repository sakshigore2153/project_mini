
<?php
/// edit data
if(isset($_POST['Student_name']) && isset($_POST['submit'])){
    $course_id= $_POST['Student_name'];
    $query ="SELECT course,name,acadmic FROM addmission WHERE Student_name='$course_id'";
    $result = $con->query($query);
    if($result->num_rows > 0){
      $addmission= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }else{
     $addmission=[];
    }
}
?>