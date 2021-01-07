<?php
include('connection.php');
if(!empty($_POST["specilizationid"])) 
{
 $sql=mysqli_query($conn,"select d_id, firstname,lastname from doctor where d_role='".$_POST['specilizationid']."'");?>

 <option selected="selected">Select Doctor </option>

 <?php
 while($row=mysqli_fetch_array($sql))
 	{?>
  <option value="<?php echo ($row['d_id']); ?>"><?php echo ($row['firstname'].$row['lastname']); ?></option>
  <?php
}
}


if(!empty($_POST["doctor"])) 
{
  
 $sql=mysqli_query($conn,"select d_fee from doctor where d_id='".$_POST['doctor']."'");
 while($row=mysqli_fetch_array($sql))
 	{?>
 <option value="<?php echo($row['d_fee']); ?>"><?php echo($row['d_fee']); ?></option>
  <?php
}
}

 ?>

