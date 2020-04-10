<?php
      $con=mysqli_connect('localhost','root','','registration','3308') or die('not connected');
      if (isset($_POST['submit']))
      {
        echo $username = $_POST['username'];
        echo $email = $_POST['email'];
        echo  $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        $qry = "insert into user (username,email,password,confirm_password) values ('$username','$email','$password','$confirm_password')";

         $result = mysqli_query($con,$qry);
         if ($result > 0)
         {
          header('location:login.php');
         }
}
      
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
</head>
<link rel="stylesheet" type="text/css" href="signup1.css">
<body>

      <div class="container-fluid back">
        <div class="row">
                 <div class="col-lg-1 whole">
                     
                 </div>
       <div id="box">
            <div id="content">

       	<div id="text">Enter the system
                  <br></div>
                  <div id="php1">
                    It is necessary  to login in your account in order to sign up for a course.
                  <br></div>
                  <div id="php2">
                    ARE YOU NEW?<b>REGISTER</b>
                  <br></div>
       	<div id="form">
                   <form action="signup.php" method="post">
       		        <input id="ft" type="text" placeholder="Username" name="username">
                  <input id="ft1" type="text" placeholder="Email" name="email">
                  <input id="ft2" type="password" placeholder="Password" name="password">
                  <input id="ft3" type="password" placeholder="Confirm password" name="confirm_password">
                    <div id="bt"><a href="login.php"><input class="btn" type="submit" name="submit" value="Register"></a>
        </div>
                </form>

       	</div>         
         
            
       </div>
       </div>
       
</body>
</html>