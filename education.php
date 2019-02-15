<?php include 'header.php'; ?>

<?php
$mysqli=new mysqli('localhost','root','','alumni');
	if($mysqli->connect_error){
		printf("can not connect databse %s\n",$mysqli->connect_error);
		exit();
	}

  if(isset($_POST['submit'])){

	 $usn=$_POST['usn'];
	 $college=$_POST['college'];
	 $degree=$_POST['degree'];
	 $yoj=$_POST['yoj'];
	 $yoc=$_POST['yoc'];

   $query="INSERT INTO education (usn,college,degree,yoj,yoc) VALUES ('$usn','$college','$degree','$yoj','$yoc')";
   $insert=$mysqli->query($query);
}
?>

<div class="container">

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
  <fieldset>

    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
   <fieldset>
     <legend>Education Details</legend>
     <div class="form-group">
       <label for="inputEmail" class="col-lg-2 control-label">USN</label>
       <div class="col-lg-10">
         <input type="text" name="usn" class="form-control"  placeholder="USN">
       </div>
     </div>
     <div class="form-group">
       <label for="inputEmail" class="col-lg-2 control-label">College</label>
       <div class="col-lg-10">
         <input type="text" name="college" class="form-control"  placeholder="College">
       </div>
     </div>
     <div class="form-group">
       <label for="inputEmail" class="col-lg-2 control-label">Degree</label>
       <div class="col-lg-10">
         <input type="text" name="degree" class="form-control"  placeholder="Degree">
       </div>
     </div>
     <div class="form-group">
       <label for="inputEmail" class="col-lg-2 control-label">Year of Joining</label>
       <div class="col-lg-10">
         <input type="text" name="yoj" class="form-control"  placeholder="Year of Joining">
       </div>
     </div>
     <div class="form-group">
       <label for="inputEmail" class="col-lg-2 control-label">Year of Completion</label>
       <div class="col-lg-10">
         <input type="text" name="yoc" class="form-control"  placeholder="Year of Completion">
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
