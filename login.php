<?php include 'header.php'; ?>
<div class="wrapper">
    <form class="form-signin">
      <h2 class="form-signin-heading">Admin login</h2>
      <input type="text" class="form-control" id="username" placeholder="Username" required="" autofocus="" />
      <input type="password" class="form-control" id="password" placeholder="Password" required=""/>
      <a name="submit" class="btn btn-primary" href="choice.php">Login</a></div>
    </form>
   </div>
      <script type="text/javascript">
      function validate()
      {
       if(document.getElementById("username").value == "admin" && document.getElementById("password").value == "1234" ))
       {
        alert( "validation success" );
        window.location="choice.php";
       }
       else
       {
        alert( "validation failed" );
       }
      }
      </script>
<?php include 'footer.php'; ?>
