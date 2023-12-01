<?php

$servername = "localhost";
$username = "root";
$password = "";
$schema= "admission";
// Create connection
$conn = new mysqli($servername, $username, $password, $schema);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$userName = $_POST['userName'];
$gender = $_POST['gender'];
$dateOfBirth = $_POST['dateOfBirth'];
$grade = $_POST['grade'];
$contactNumber = $_POST['contactNumber'];
$email = $_POST['email'];
$comment = $_POST['comment'];
echo "_test_before_submit";
    if(isset($_POST['submit'])){
        echo "_test_after_submit";
        $data = "INSERT INTO students ( Student_name ,Gender, Date_of_birth, Grade,Contact_numbe,Email,Comment)
        values('$userName' ,'$gender' , '$dateOfBirth' , '$grade' , '$contactNumber' ,'$email', '$comment')";
        mysqli_query($conn,$data);
        header("Location:/mohamed/success.html");

    }
    
?>