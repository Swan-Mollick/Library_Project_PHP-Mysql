<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap.min.css" text="text/css" rel="stylesheet">
    <link rel="stylesheet" text="text/css" href="style2.css">
    <title>Add Book</title>
</head>
<body>
  <div class="add">
    <h1 class="admin">Add New Books</h1>
    <a href="adminlogin.php"><button type="button" class="btn btn-outline-warning">Back</button></a>

    <form method="post">
        <div class="form-row">
          <div class="col-12">
            <label for="validationDefault01">Book Name</label>
            <input name="book" type="text" class="form-control" id="validationDefault01" placeholder="Book Name" value=" " required>
          </div>
          <div class="col-12">
            <label for="validationDefault02">Author</label>
            <input name="author" type="text" class="form-control" id="validationDefault02" placeholder="Author" value=" " required>
          </div>
          <div class="col-12>
            <label for="validationDefault02">Publication</label>
            <input name="pub" type="text" class="form-control" id="validationDefault02" placeholder="Publication" value=" " required>
          </div>
        
        <div class="form-row">
          <div class="col-12 ">
            <label for="validationDefault03">Branch</label>
            <input name="branch" type="text" class="form-control" id="validationDefault03" placeholder="Branch" value=" " required>
          </div>
        <input name="submit" class="mt-3 btn btn-primary" type="submit" value="Add">
    </form>

    <?php 
                    if (isset($_POST['submit'])) {
                        $name = $_POST['book'];
                        $author = $_POST['author'];
                        $publication = $_POST['pub'];
                        $branch = $_POST['branch'];
                        $servername = "localhost"; 
                        $username = "root";
                        $dbpass = "";
                        $dbname = "library";
        
                        $conn = new mysqli($servername, $username, $dbpass, $dbname);
        
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
        
                        $sql = "INSERT INTO addbook(`name`,`author`,`publication`,`branch`)
                                VALUES ('$name','$author','$publication','$branch')";

                    if ($conn->query($sql) === TRUE) {
                        echo'<p style="color:green;">Registerd successfully...</p>';
                        }
                    else {
                        echo '<p style="color:red;">Error: ' . $sql .'<br>' . $conn->error.'</p>';
                        }
                    }
                ?>
    
  </div>
</body>
</html>