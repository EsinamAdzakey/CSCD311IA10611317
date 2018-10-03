<?php 
	  require"login.php";

	  $userid = "";
	  $password = "";

	  if(isset($_POST["user"])){
	   $password = stript_tags($_POST['pswd']);
       $username = stript_tags($_POST["userid"]);

       

       $query = mysqli_query($connection , "SELECT * FROM user  WHERE id = '$username' AND password = '$pswd'");
      // $check_query = mysqli_num_rows($query);

        if($check_query === 1 ){
            header("LOCATION:home.php");
       }else{
           echo"not successfull" ;
       }

	  }
 ?>





 <!DOCTYPE html>
 <html>
 <head>
   <title>Login Form</title>
    <title>Student Registration</title>
    <script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <link rel="stylesheet" href="assets/bootstrap-4.1.3-dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="assets/bootstrap-4.1.3-dist/css/bootstrap-grid.min.css">

 </head>
 <body>
      
      <div class="container">
         <form id="registrationForm" action="index.php" method="post">
              <table cellspacing=10px cellpadding=10px>
              <h3>Please Login</h3><br>
                <tr>
                  <td>
                      <label for="userid">Username:</label>
                  </td>
                  <td>
                     <input class="form-control" type="text" name="userid" id="userid" placeholder="Enter Username" required>
                  </td>
                </tr>
                <tr>
                   <td>
                     <label for="pswd">Password:</label>
                  </td>
                  <td>
                      <input class="form-control" type="Password" name="pswd" id="pswd" placeholder="Enter Password" required>
                  </td>
                </tr>
                <tr>
              <td>
               
              </td>
              <td>
                 <button type="submit" class="btn btn-danger"  name="sub" id="btnSub">Login</button>
              </td>
            </tr>

              </table>
          </form>
      </div>

 </body>
 </html>





