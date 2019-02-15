<?php include 'header.php'; ?>

<?php
$mysqli=new mysqli('localhost','root','','alumni');
	if($mysqli->connect_error){
		printf("can not connect databse %s\n",$mysqli->connect_error);
		exit();
	}

  if(isset($_POST['submit'])){

	 $usn=$_POST['usn'];
	 $first_name=$_POST['first_name'];
	 $last_name=$_POST['last_name'];
	 $address=$_POST['address'];
	 $gender=$_POST['gender'];
	 $email=$_POST['email'];
   $mobile=$_POST['mobile'];
   $admitted=$_POST['admitted'];
   $passed=$_POST['passed'];
   $cgpa=$_POST['cgpa'];

   $query="INSERT INTO student (usn,first_name,last_name,address,gender,email,mobile,admitted,passed,cgpa) VALUES ('$usn','$first_name','$last_name','$address','$gender','$email','$mobile','$admitted','$passed','$cgpa')";
   $insert=$mysqli->query($query);
}
?>


<div class="container">

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
  <fieldset>

    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
   <fieldset>
     <legend>Register</legend>
     <div class="form-group">
       <label for="inputEmail" class="col-lg-2 control-label">USN</label>
       <div class="col-lg-10">
         <input type="text" name="usn" class="form-control"  placeholder="USN">
       </div>
     </div>
     <div class="form-group">
       <label for="inputEmail" class="col-lg-2 control-label">First Name</label>
       <div class="col-lg-10">
         <input type="text" name="first_name" class="form-control"  placeholder="First Name">
       </div>
     </div>
     <div class="form-group">
       <label for="inputEmail" class="col-lg-2 control-label">Last Name</label>
       <div class="col-lg-10">
         <input type="text" name="last_name" class="form-control"  placeholder="Last Name">
       </div>
     </div>
     <div class="form-group">
       <label for="textArea" class="col-lg-2 control-label">Address</label>
       <div class="col-lg-10">
         <textarea class="form-control" name="address" rows="3" id="textArea" placeholder="Address"></textarea>
       </div>
     </div>
     <div class="form-group">
       <label for="inputEmail" class="col-lg-2 control-label">Gender</label>
       <div class="col-lg-10">
         <input type="text" name="gender" class="form-control"  placeholder="Gender">
       </div>
     </div>
     <div class="form-group">
       <label for="inputEmail" class="col-lg-2 control-label">Email-id</label>
       <div class="col-lg-10">
         <input type="text" name="email" class="form-control"  placeholder="Email">
       </div>
     </div>
     <div class="form-group">
       <label for="inputEmail" class="col-lg-2 control-label">Mobile Number</label>
       <div class="col-lg-10">
         <input type="text" name="mobile" class="form-control"  placeholder="Mobile">
       </div>
     </div>
     <div class="form-group">
       <label for="inputEmail" class="col-lg-2 control-label">Year Admitted</label>
       <div class="col-lg-10">
         <input type="text" name="admitted" class="form-control"  placeholder="Year Admitted">
       </div>
     </div>
     <div class="form-group">
       <label for="inputEmail" class="col-lg-2 control-label">Year Passed</label>
       <div class="col-lg-10">
         <input type="text" name="passed" class="form-control"  placeholder="Year Passed">
       </div>
     </div>
     <div class="form-group">
       <label for="inputEmail" class="col-lg-2 control-label">CGPA</label>
       <div class="col-lg-10">
         <input type="text" name="cgpa" class="form-control"  placeholder="CGPA">
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
