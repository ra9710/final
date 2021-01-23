<?php include 'header.php';


$host="localhost";
$username="root";
$password="";
$db="login";

$conn=mysqli_connect($host,$username,$password,"$db");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }


if(isset($_POST['username'])){
    $uname=$_POST['username'];
    $password=$_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '" . $uname. "' and password = '" . $password. "'");

    if(mysqli_num_rows($result)==1){
        echo "You Have Successfully Logged in";
        exit();
    }
    else{
     echo "You have Entered Incorrect Username or Password";
     exit();   
    }

}
?>



<!DOCTYPE html>
<html>
<div class="container">

<head>
  <link rel="stylesheet" href="assets/style.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
  <title>Sign in</title>
</head>

<body>
        
            <h1 class="title">Login</h1>
            <div class="main">
            <p class="sign" align="center">Sign in</p>
             <form method="POST" action="#" class="form1">
                 <input class="un " name="username" type="text" align="center" placeholder="Username">
                 <input class="pass" name="password" type="password" align="center" placeholder="Password">
                 <input class="submit" Type="submit" align="center" value="Login">
                 <p class="forgot" align="center"><a href="#">Forgot Password?</p>
            
             </form>   
        
             </div>        
</body>

</html>

</div>


<?php include 'footer.php';?>