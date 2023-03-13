<?php
include('include/config.php');
// echo "hi";
if(!empty($_REQUEST["specializationid"])) 
{

 $sql=mysqli_query($conn,"select doctorName,id from doctors where specialization='".$_REQUEST['specializationid']."'");
 ?>
 <option selected="selected">Select Doctor </option>
 <?php
 while($row=mysqli_fetch_array($sql))
 	{
?>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['doctorName']); ?></option>
  <?php
}
}



if(!empty($_REQUEST["doctor"])) 
{

 $sql=mysqli_query($conn,"select docFees from doctors where id='".$_REQUEST['doctor']."'");
 while($row=mysqli_fetch_array($sql))
 	{?>
 <option value="<?php echo htmlentities($row['docFees']); ?>"><?php echo htmlentities($row['docFees']); ?></option>
  <?php
}
}

?>