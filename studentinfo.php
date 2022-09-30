<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap.min.css" text="text/css" rel="stylesheet">
    <link rel="stylesheet" text="text/css" href="style2.css">
    <title>Student Information</title>
</head>
<body>

<div class="add">
    <h1 class="admin">View Student Info</h1>
    <a href="studentlogin.php"><button type="button" class="btn btn-outline-warning">Back</button></a>

      <form method="post">
        <div class="form-row">
          <div class="col-12">
            <label for="validationDefault01">Name</label>
            <input name="name" type="text" class="form-control" id="validationDefault01" placeholder="First name" value=" " required>
          </div>
          <div class="col-12">
            <label for="validationDefault02">Branch</label>
            <input name="branch" type="text" class="form-control" id="validationDefault02" placeholder="Branch" value=" " required>
          </div>
        </div>
        <input name="submit" class="mt-3 btn btn-primary" type="submit" value="View Info">
      </form>

  </div>
</body>
</html>