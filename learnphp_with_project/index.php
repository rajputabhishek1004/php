<?php
$insert = false ;
if(isset($_POST['name'])){
    //set connection variable
 $server = "localhost";
 $username = "root";
 $password = "";
//create database
 $con = mysqli_connect($server,$username,$password);
//check for connection seccess
 if(!$con){
     die("connection to database failed due to " . mysqli_connect_error());
 }
//  echo "successfull connection with db"

//collect post variable
$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];
$sql = "INSERT INTO `us_trip`.`trip` ( `name`, `age`, `gender`, `email`, `phone`, `desc`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
// echo $sql;

//exercute the query
//object operator
if($con->query($sql) == true){
    //echo "successfully inserted";

    //flag for successfull submition/insertion of form
    $insert = true ;
}else{
    echo " error $sql <br> $con->error";
}

//close database connection
$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome to travel form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to IIT kanpur US trip form</h1>
        <p>Enter Your Detail And Submit This Form To Confirm Your Participation</p>

        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Your Name">
            <input type="text" name="age" id="age" placeholder="Enter Your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter Your Gender">
            <input type="text" name="email" id="email" placeholder="Enter Your Email">
            <input type="text" name="phone" id="phone" placeholder="Enter Your Phine Number">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter Other Information Here"></textarea>
            <button class="btn">SUBMIT</button>

        </form>
        <?php
        if($insert == true){
        echo "<p class='submitmsg'>Thanks For Submiting Your Form We Are Happy To See You For The US Trip</p>";
        }
        ?>
    </div>
</body>
</html>

