<?php
$insert==false;
if(isset($_POST['name'])){

$server= "localhost";
$username= "root";
$password= "";
$con=mysqli_connect($server, $username, $password);

if(!$con){
    die("Connection to this database falied due to" .mqsqli_connect_error());

}
//echo"Success Connecting to the Database";
$name=$_POST['name'];
$gende=$_POST['gender'];
$age=$_POST['age'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$desc=$_POST['desc'];
$sql="INSERT INTO `trip`.`trip` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
//echo $sql

if($con->query($sql)==true){
    //echo"Sucessfull inserted";
    $insert==true;
}
else{
    echo"Error: $sql<br>$con->error";


}
$con->close();
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet"> 
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  
<link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="Beach" src="Beach.jpg" alt="Cox's Bazar">
    <div class="container">
        <h1>
            Welcome to Cox's Bazar Trip form
        </h1>
        <p><b>Enter your details and submit this form to confirm your travel</b></p>
        <?php 
        if($insert==true){
            echo"<p class='submitMsg'><b>Thanks For submitting your information. We wish good luck for your trip</b> </p>"
        }
        
        ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name: ">
            <input type="text" name="age" id="age" placeholder="Enter your age: ">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender: ">
            <input type="email" name="email" id="email" placeholder="Enter your email: ">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone: ">

            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter Other Information"></textarea>

            <button class="btn">Submit</button>
            
        </form>
    </div>
    <script src="proj.js"></script>
</body>
</html>
