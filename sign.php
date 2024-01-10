
<?php
    if($_SERVER['REQUEST_METHOD']== 'POST'){
        include './connect.php';

        $uname =$_POST['name'];
        $rfid =$_POST['rfidno'];
        $name =$_POST['username'];
        $password =$_POST['password'];

        // data insertion quries

        // $sql = "INSERT INTO `registration` (`username`, `password`) VALUES ($name, $password)";
        // $sql  = "INSERT INTO `registration` (`username`, `password`) VALUES ( '$name', '$password')";
        // $result = mysqli_query($conn, $sql);

        // if($result){
        //     echo "Data inserted successfully";
        // }else{
        //     echo "error found" . mysqli_error($conn);
        // }


        $user = false;
        $sign = false;

        $sql = "SELECT * FROM `registration` WHERE username ='$name'";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $num = mysqli_num_rows($result);
            if($num >0 ){
                // echo "User already exists";
                $user = true;
            }else{
                //  $sql = "INSERT INTO `registration` (`username`, `password`) VALUES ($name, $password)";
                $sql  = "INSERT INTO `registration` ( `uname`, `rfid`, `username`, `password`) VALUES ('$uname', '$rfid', '$name', '$password')";
                $result = mysqli_query($conn, $sql);
                if($result){
                    // echo "signup successfully";
                    $sign = true;
                }else{
                    echo "error found" . mysqli_error($conn);
                }

            }
        }
        
        if($user){
            echo ('<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Error!</strong>User Has Been Already Exits.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button></div>');
        }

        if($sign){
            echo ('<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> User Has Been Signup Successfully.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
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

    <title>Sign up!</title>
  </head>
  <body>
    <?php require 'navbar.php'; ?>
    <div class="container mt-3">
        <h1 class="text-center">Sign Up Page</h1>
    <form action="sign.php" method="post" >
        <div class="container w-50">
        <div class="form-group">
            <label for="text">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Full Name">
        </div>
        <div class="form-group">
            <label for="text">RFID Number</label>
            <input type="text" class="form-control" id="rfid" name="rfidno" placeholder="Enter Your RFID Number">
        </div>
        <div class="form-group mt-2">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username" placeholder="Enter Your Unique Username">
        </div>
        
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Your Password">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="cpassword" placeholder="Confirm Your Password">
            <small id="passwordhelp" class="form-text text-muted">Make sure Type same password.</small>
        </div>
        <button type="submit" class="btn btn-primary w-100">Sign Up</button>
        </div>
</form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
  </body>
</html>