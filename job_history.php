<?php
$connect = mysqli_connect("localhost", "root", "", "alumni");
if(isset($_POST['submit'])){
  $com=$_POST['com'];
  $query ="SELECT s.first_name,s.last_name,j.company,j.designation from student s,job_history j where j.company='$com' and s.usn=j.usn";
  $result = mysqli_query($connect, $query);
}
?>
<!DOCTYPE html>
<html>
     <head>
          <title>Alumni</title>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
          <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
          <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
          <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
     </head>
     <body>
          <br /><br />
          <div class="container">
               <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                  <h3 align="center">Alumni</h3>
                  <br />
                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Enter Company</label>
                    <div class="col-lg-10">
                      <input type="text" name="com" class="form-control"  placeholder="Company">
                    </div>
                  </div>
                  <br><br>
                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                  <br><br>
               <div class="table-responsive">
                    <table id="employee_data" class="table table-striped table-bordered">
                         <thead>

                              <tr>

                                   <td>first_name</td>
                                   <td>last_name</td>
                                   <td>company</td>
                                   <td>designation</td>

                              </tr>
                         </thead>

                         <?php
                         while($row = mysqli_fetch_array($result))
                         {
                              echo '
                              <tr>

                                   <td>'.$row["first_name"].'</td>
                                   <td>'.$row["last_name"].'</td>
                                   <td>'.$row["company"].'</td>
                                   <td>'.$row["designation"].'</td>

                              </tr>
                              ';
                         }

                         ?>
                    </table>
               </div>
          </div>
     </body>
</html>
<script>
$(document).ready(function(){
     $('#employee_data').DataTable();
});
</script>
