 <?php
if(isset($_POST['name'])){
    
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ustrip";
$conn = mysqli_connect($servername, $username, $password,  $dbname);

if (!$conn) {
    die("Could not connect: " . mysqli_connect_error());
}   
// echo "Connected successfully<br>";

$name   = mysqli_real_escape_string($conn, $_POST['name']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$age    = mysqli_real_escape_string($conn, $_POST['age']);
$email  = mysqli_real_escape_string($conn, $_POST['email']);
$phone  = mysqli_real_escape_string($conn, $_POST['phone']);
$other  = mysqli_real_escape_string($conn, $_POST['other']);

 $sql= "INSERT INTO `ustrip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`)
  VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp());";
// echo $sql. "<br>"; 

 if($conn->query($sql)== TRUE){
    header("Location: thankyou.html");
    exit();
  
}
else{
     echo "ERROR: $sql <br> $conn->error";
}
$conn->close();
}
 
?>
 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>US Trip Form</title>
    <link rel="stylesheet" href="travelproj.css" />
  </head>
  <body> 
   <img class="bg" src="travel.jpg" alt="travel.jpg" />
    <div class="container">
      <h1>Welcome to MCGK US Trip form</h1>
      <p>
        Enter your details and submit this form to confirm your participation in
        the trip
      </p>
     <!--  <p class="submitMsg">
        Thanks for submitting your form. We are happy to see you joining us for
        the US trip
      </p> -->

      <form action="index.php" method="post">
        <input type="text" name="name" id="name" placeholder="Enter your name" required />

            <input type="text" name="age" id="age" placeholder="Enter your age" required />
            <input type="text" name="gender" id="gender" placeholder="Enter your gender" required />
            <input type="email" name="email" id="email" placeholder="Enter your email" required />
            <input type="text" name="phone" id="phone" placeholder="Enter your phone number" required />
            <textarea name="other" id="other" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn" type="submit">Submit</button>

   
      </form>
    </div>
 
  </body>
</html>
