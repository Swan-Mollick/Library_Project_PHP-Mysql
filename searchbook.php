<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap.min.css" text="text/css" rel="stylesheet">
    <link rel="stylesheet" text="text/css" href="style2.css">
    <title>Search Book</title>
</head>
<body>

<div class="add">
    <h1 class="admin">Search Books</h1>
    <a href="studentlogin.php"><button type="button" class="btn btn-outline-warning">Back</button></a>

    <form method="post">
        <div class="form-row">
          <div class="col-12">
            <label for="validationDefault01">Book Name</label>
            <input name="name" type="text" class="form-control" id="validationDefault01" placeholder="Book Name" value=" " required>
          </div>
        </div>
        <input name="submit" class="mt-3 mb-3 btn btn-primary" type="submit" value="Search">
    </form>

    <?php
 if (isset($_POST['submit'])) {
  $name = $_POST['name'];
$servername = "localhost";
$username = "root";
$dbpass = "";
$dbname = "library";

$conn = mysqli_connect($servername, $username, $dbpass, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT name,  author, publication, branch  FROM addbook WHERE name='$name'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "1.Name:-  " . $row["name"]. "<br>" . "2.Author:-  " . $row["author"]. "<br>" . "3.Publication:-  " . $row["publication"]. "<br>" . "4.Branch:-  " . $row["branch"] . "<br>" ."<br>";
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