<?php include('server.php'); 
//if user isn't loggedin, they can't access this page
if(empty($_SESSION['username'])){
    header('location: login.php');
}


?>
<!DOCTYPE html>
<html>

   <head>
    <title>login form</title>
    <link href="style.css" rel="stylesheet">
   </head>

   <body>
      <dev>
        <h2 class="header">Home Page</h2>
      </dev>
      <dev class="content">
        <?php if (isset($_SESSION['success'])){ ?>
        <dev class="success">
            <h3>
                <?php 
                 echo $_SESSION['success'];
                  unset($_SESSION['success']);
                ?>
            </h3>

        </dev>
        <?php } ?>
        <?php if(isset($_SESSION['username'])){ ?>
        <p>welcome<strong> <?php echo $_SESSION['username']; ?></strong></p>
        <p> <a href="index.php?logout='1'" style="color:red;">logout</a></p>
        <?php } ?>


      </dev>
    </body>
</html> 