ik<?php
include('../database/dbcon.php');
?>
<form action="" method="post">
<select name="Select_course">
    <option value="">Select_course</option>
    <?php 
    $query ="SELECT course_id,Student_name FROM addmission";
    $result = $con->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $option =$optionData['Student_name'];
        $id =$optionData['course_id'];
    ?>
    <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
   <?php
    }}
    ?>
</select>
<input type="submit" name="submit">
</form>
<?php
include("fetch-data.php");
include("display-data.php");
?>