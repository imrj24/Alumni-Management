<?php
$connect = mysqli_connect("localhost", "root", "", "alumni");
$query ="SELECT s.first_name,s.last_name,j.company,j.designation from student s,job j where j.company='infosys' and s.usn=j.usn";
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
               <!--<div class="dropdown">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Dropdown button
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Link 1</a>
      <a class="dropdown-item" href="#">Link 2</a>
      <a class="dropdown-item" href="#">Link 3</a>
    </div>
  </div>-->


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
