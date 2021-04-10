<?php 
session_start();
$username="";
$email="";
$errors=array();

print_r($_POST);


//connect to the database


$db=mysqli_connect('localhost','root','root','registeration');

// if the register button is clicked

if(isset($_POST['register'])){
    $username=mysql_real_escape_string($_POST['username']);
    $email=mysql_real_escape_string($_POST['email']);
    $password_1=mysql_real_escape_string($_POST['password_1']);
    $password_2=mysql_real_escape_string($_POST['password_2']);



   // ensure that form field are filled

 if(empty($username)){
    array_push($errors,"Username is required");
 }
 if(empty($email)){
    array_push($errors,"Email is required");
 }
 if(empty($password_1)){
    array_push($errors,"Password is required");
 }
 if($password_1 != $password_2){
    array_push($errors,"the two passwords don't match");
 }
 // if there no errors
 if(count($errors) == 0){
    $password=md5($password_1);
    $sql="INSERT INTO users(username, email, password) VALUES('$username', '$email','$password')";
    mysql_query($conn,$sql);
  }
}
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$_SESSION['username'] = $username;
$_SESSION["success"] = "you are logged in";
header('location: index.php'); //redirect to home



//logout
if(isset($_GET['logout'])){
   session_destroy();
   unset($_SESSION['username']);
   header('location: login.php');
}


//log user in form login page
if(isset($_POST['login'])){
   $username=mysql_real_escape_string($_POST['username']);
   $password_1=mysql_real_escape_string($_POST['password']);



  // ensure that form field are filled

if(empty($username)){
   array_push($errors,"Username is required");
}

if(empty($password)){
   array_push($errors,"Password is required");
}
if(count($errors) == 0){
   $password=md5($password);
   $query="SELECT * FROM users WHERE username='$username' AND password='$password'";
   $result=mysqli_query($db,$query);
   if(mysqli_num_rows($result)==1){
      //log user in 
      $_SESSION['username'] = $username;
      $_SESSION["success"] = "you are logged in";
      header('location: index.php');
   }else{
      array_push($errors, "wrong username/password combination");
      header('location: login.php');

   }

}
}

?>