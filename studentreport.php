<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap.min.css" text="text/css" rel="stylesheet">
    <link rel="stylesheet" text="text/css" href="style2.css">
    <title>Student Report</title>
</head>
<body>
  <div class="add">
    <h1 class="admin">Student Report</h1>
    <a href="adminlogin.php"><button type="button" class="btn btn-outline-warning">Back</button></a>

    <form method="post">
      <input name="submit" class="mt-3 mb-3 btn btn-primary" type="submit" value="View report">
  </form>

      <?php
 if (isset($_POST['submit'])) {
$servername = "localhost";
$username = "root";
$dbpass = "";
$dbname = "library";

$conn = mysqli_connect($servername, $username, $dbpass, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT name, email, password FROM studentsignup";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "1.Name:-  " . $row["name"]. "<br>" . "2.Email:-  " . $row["email"]. "<br>" . "3.Password:-  " . $row["password"]. "<br>" . "<br>" ."<br>";
    }
} 
else {
    echo "0 results";
}

mysqli_close($conn);
 }
?>


      
  </div>
</body>
</html>