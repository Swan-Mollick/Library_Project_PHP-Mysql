<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap.min.css" text="text/css" rel="stylesheet">
    <link rel="stylesheet" text="text/css" href="style2.css">
    <title>Delete Book</title>
</head>
<body>
  <div class="add">
    <h1 class="admin">Delete a Book</h1>
    <a href="adminlogin.php"><button type="button" class="btn btn-outline-warning">Back</button></a>

    <form method="post">
        <div class="form-row">
          <div class="col-12">
            <label for="validationDefault01">Book Name</label>
            <input name="book" type="text" class="form-control" id="validationDefault01" placeholder="Book Name" value=" " required>
          </div>
        <input name="submit" class="mt-3 btn btn-primary" type="submit" value="Delete">
    </form>

    <?php
				if(isset($_POST['submit']))
				{
					$con = new mysqli ("localhost","root","","library");
					$reg=$_POST['book'];
					$sql = "DELETE FROM addbook WHERE name = '".$reg."'";
					
					mysqli_query($con, $sql);
					
					if(mysqli_affected_rows($con)>0)
					{
						echo "Book Deleted Successful";
					}
					else
					{
						echo".....Something Went Wrong......";
					}
					
				}
				
				
				
				?>
    
  </div>
</body>
</html>