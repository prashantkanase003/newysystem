
<?php

    require ('connect.php');

     session_start();
     if(!isset($_SESSION['username'])){
        header('location:login.php');
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Welcome!</title>
</head>
<body>
    <!-- logout button -->
    <div class="container d-flex flex-column justify-content-center align-items-center bg">
        <div class="card w-50 mt-5">
                <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                <div class="card-body ">
                    <h5 class="card-title"> Username : <?php echo $_SESSION ['username'] ?></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="Logout.php" class="btn btn-primary mt-2 ml-50">Log Out</a>
                </div>
    </div>
    </div>
    <!-- username display -->

    
</body>
</html>