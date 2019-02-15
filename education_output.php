<?php
$connect = mysqli_connect("localhost", "root", "", "alumni");
$query ="SELECT usn,first_name,last_name,email,mobile FROM student";
$result = mysqli_query($connect, $query);
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
               <h3 align="center">Alumni</h3>
               <br />


               <div class="table-responsive">
                    <table id="employee_data" class="table table-striped table-bordered">
                         <thead>
                              <tr>
                                   <td>usn</td>
                                   <td>first_name</td>
                                   <td>last_name</td>
                                   <td>email</td>
                                   <td>mobile</td>
                              </tr>
                         </thead>
                         <?php
                         while($row = mysqli_fetch_array($result))
                         {
                              echo '
                              <tr>
                                   <td>'.$row["usn"].'</td>
                                   <td>'.$row["first_name"].'</td>
                                   <td>'.$row["last_name"].'</td>
                                   <td>'.$row["email"].'</td>
                                   <td>'.$row["mobile"].'</td>
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
