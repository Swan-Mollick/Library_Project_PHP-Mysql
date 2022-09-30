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
          <div class="col-12">
            <label for="validationDefault02">Author</label>
            <input name="author" type="text" class="form-control" id="validationDefault02" placeholder="Author" value=" " required>
          </div>
        <input name="submit" class="mt-3 btn btn-primary" type="submit" value="Delete">
    </form>
    
  </div>
</body>
</html>