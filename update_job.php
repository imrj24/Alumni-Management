<?php include 'header.php'; ?>

<?php
$mysqli=new mysqli('localhost','root','','alumni');
	if($mysqli->connect_error){
		printf("can not connect databse %s\n",$mysqli->connect_error);
		exit();
	}

  if(isset($_POST['submit'])){

	 $usn=$_POST['usn'];
	 $company=$_POST['company'];
	 $designation=$_POST['designation'];
	 $location=$_POST['location'];


   $query="update job set company='$company',designation='$designation',location='$location' where usn='$usn'";
   $insert=$mysqli->query($query);
   $query2="INSERT INTO job_history (usn,company,designation) VALUES ('$usn','$company','$designation')";
   $insert=$mysqli->query($query2);
}
?>

<div class="container">

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
  <fieldset>

    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
   <fieldset>
     <legend>Job Details</legend>
     <div class="form-group">
       <label for="inputEmail" class="col-lg-2 control-label">USN</label>
       <div class="col-lg-10">
         <input type="text" name="usn" class="form-control"  placeholder="USN">
       </div>
     </div>
     <div class="form-group">
       <label for="inputEmail" class="col-lg-2 control-label">Company</label>
       <div class="col-lg-10">
         <input type="text" name="company" class="form-control"  placeholder="Company">
       </div>
     </div>
     <div class="form-group">
       <label for="inputEmail" class="col-lg-2 control-label">Designation</label>
       <div class="col-lg-10">
         <input type="text" name="designation" class="form-control"  placeholder="Designation">
       </div>
     </div>
     <div class="form-group">
       <label for="inputEmail" class="col-lg-2 control-label">Location</label>
       <div class="col-lg-10">
         <input type="text" name="location" class="form-control"  placeholder="Location">
       </div>
     </div>

     <div class="form-group">
       <div class="col-lg-10 col-lg-offset-2">
         <button type="reset" class="btn btn-danger">Cancel</button>
         <button type="submit" name="submit" class="btn btn-primary">Submit</button>
       </div>
     </div>

      </fieldset>
</form>
</div>

<?php include 'footer.php'; ?>
