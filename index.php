<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" text="text/css" href="style.css">
    <!--  -->
    <title>Homepage</title>
</head>
<body>
    <h1 style="color:blue"> Welcome to Digital Library</h1>

<div class="container">
    <div class="row">
        <div class="column">
            <div class="login1">
                
            <form method="post">
                    <p>Login</p>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-5">
                    <input name="email" type="email" class="form-control" id="inputEmail2">
                </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-5">
                    <input name="pass" type="password" class="form-control" id="inputPassword4">
                </div>
                </div>
                
                <a href="adminlogin.php"><button type="button" class="btn btn-outline-warning">Sign in</button></a>
            </form>

            </div>
        </div>
        <div class="colimn">
            <div class="login2">
               
                <form method="post">
                    <p>Sign Up</p>
                    <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-5">
                    <input name="name2" type="text" class="form-control" id="inputEmail2">
                </div>
                </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                        <input name="email2" type="email" class="form-control" id="inputEmail3">
                    </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                        <input name="pass2" type="password" class="form-control" id="inputPassword3">
                    </div>
                    </div>
                    <label for="Teacher" class="col-sm-2 col-form-label">SignUp as Teacher</label>
                    <input name="teacher" type="checkbox" value="Signup as Teacher" ><br>

                    <a href="studentlogin.php"><button type="button" class="btn btn-outline-warning">Sign Up</button></a>
                </form>

            </div>
        </div>
    </div>
</div>

</body>
</html>