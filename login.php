
<?php
    if($_SERVER['REQUEST_METHOD']== 'POST'){
        include './connect.php';

        $name =$_POST['username'];
        $password =$_POST['password'];

        $user = false;
        $sign = false;

        $sql = "SELECT * FROM `registration` WHERE username ='$name' AND password ='$password' ";
        $result = mysqli_query($conn, $sql);

        if ($result){
            $num = mysqli_num_rows($result);
            if($num >0 ){
                // this is for to give alert on the topbar
                echo ('<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong>User Has Loged In.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button></div>');

                // session start to store the user login
                session_start();
                $_SESSION['username'] = $name;
                header('location:profile.php');

            }else{
                echo ('<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Error!</strong>User Invalid.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button></div>');

            }
        }
        
        
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Log In!</title>
  </head>
  <body>
  <?php require 'navbar.php'; ?>
    <div class="container mt-3 w-25">
        <h1 class="text-center">Log In Page</h1>
    <form action="login.php" method="post">
        <div class="form-group mt-2">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username" placeholder="Enter Username">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your Password">
        </div>
        <button type="submit" class="btn btn-primary w-100">Log In</button>
</form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
  </body>
</html> 