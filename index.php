
<?php
if(isset($_POST['submit'])){
    
    $email = $_POST['regEmail'];

    if(empty($email)){
        echo '<script>alert("Email is Empty")</script>';
    }

}

if(isset($_POST['submit'])) {
$email = $_POST['regEmail'];
require_once 'db.php';


$sql= "INSERT INTO emaildb (email)VALUES('$email')";    
    if($conn->query($sql) === TRUE){   
        // $success= '
        //          <div class="alert alert-success" role="alert">
        //          Congratulations with successful registration!
        //           </div>   ';
    
            header('refresh:2; index.php');
    
    }else {
        echo 'error' . $sql . $conn->error;
    }
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./styles/style.css" />
    <title>Magebit</title>
</head>

<body>
    <div class="whitebox">
        <ul class="topnav">
            <li><a class="active" href="index.php">pinapple.</a></li>
            <li style="float:right"><a href="#">About</a></li>
            <li style="float:right"><a href="#">How it works</a></li>
            <li style="float:right"><a href="#">Contact</a></li>
        </ul>
        </br>

        <h1>Subscribe to newsletter</h1>
        <h4>
            Subscribe to our newsletter and get 10% discount on pinapple glasses.
        </h4>
        <form action="" method="POST">
            
                <input name="regEmail" placeholder="Enter your email adress" required>
                <button type="submit" name="submit">
                Submit </button>
                
            <div class="xxxx">
                <input type="checkbox" required></input>
                <p>I agree to <a href="#">terms of service</a></p>
            </div> 
        </form>
    </div>

    <img class="ananas" src="./img/image_summer.png" alt="GlassAnanas">
</body>

</html>