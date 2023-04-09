<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
              *{
    font-family: Arial, Helvetica, sans-serif;
}
body{

    width: 600px;}
div{
    display: inline;
    
    display: flex;
    justify-content: space-between;
    align-items: center;
}
span{
    font-weight: 700;
    font-size: 30px;
}

a{
    text-decoration: none;
    color: white;
}
button{
    color: white;
    background-color: green;
    height: 30px;
    width: 160px;
}
table{
  width: 600px;
    text-align: center;
}
    </style>
</head>
<body>
 <div>
    <div class="add">
        <span>Users Details</span>
    </div>
    <div >   
    <button><a href="./1.php">Add New User</a></button>
    </div> 
 </div>
    <hr>

    
</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lab4";

// create a new MySQLi object for the database connection
$conn = new mysqli($servername, $username, $password, $dbname);
// check if the connection to the database was successful, if not, terminate the script
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// retrieve form data
$name=$_POST['name'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$MailStatus=isset($_POST['checkbox']) ? 'yes' : 'No';
// Check if the form has already been submitted in this session
if (!isset($_SESSION['submitted'])) {
// Check if the record already exists in db
    $check_query = "SELECT * FROM lab4_php WHERE Email='$email'";
    $check_result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        echo "<p style='color: red;'>Record already exists</p>";
    } else {
// Insert new record
$sql = "INSERT INTO lab4_php (fname , Email, Gender , MailStatus )
VALUES ('$name', '$email', '$gender','$MailStatus')";

if (mysqli_query($conn, $sql)) {
//   echo "New record created successfully";

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
    }
}
// Retrieve data from the database
$sql = "SELECT fname, Email, Gender ,MailStatus  FROM lab4_php";
$result = $conn->query($sql);
// If there are any results, display them in an HTML table
if ($result->num_rows > 0) {
  // output data of each row
  echo "<table border='1'>";
  echo "<tr><th>#</th><th>fName</th><th>Email</th><th>Gender</th><th>Mail status</th></tr>";
  $i = 1;
  while($row = $result->fetch_assoc()) {
    $bgcolor = ($i % 2 == 0) ? 'rgba(128, 128, 128, 0.733);' : '';
    echo "<tr style='background-color:$bgcolor'><td>".$i."</td><td>".$row["fname"]."</td><td>".$row["Email"]."</td><td>".$row["Gender"]."</td><td>".$row["MailStatus"]."</td></tr>";
    $i++;
  }
  echo "</table>";
} else {
  echo "0 results";
}
  
$conn->close();
?>