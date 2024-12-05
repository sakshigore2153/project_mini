<?php
include('../database/dbcon.php');
?>
!-----display data-->
    <?php
    if(isset($addmission)>0)
    {
    ?>
    <table border="1" cellspacing="0" cellpadding="5">
    <tr>
	    <th>ID</th>
        <th>Student course</th>
        <th>Student name</th>
        <th>Acadamic year</th>
    </tr>
    <?php
       if(count($addmission)>0)
       {
    $sn=1;
    foreach ($addmission as $addmission) {
     ?>
<tr>
    <td><?php echo $sn; ?></td>
    <td><?php echo $addmission['course']; ?></td>
    <td><?php echo $addmission['name']; ?></td>
	<td><?php echo $addmission['acadmic']; ?></td>

</tr>
     <?php
   $sn++; 
   }
}else{
    echo "<tr><td colspan='3'>No Data Found</td></tr>";
}
?>
</table>
<?php
}
?>