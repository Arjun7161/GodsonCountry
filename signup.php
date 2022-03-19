<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="style.css">
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
</head>
<body>
<div class="high">
        
        
        <nav>
            <img src="Img/logo.png" class="logo">
            <a class="navbar-brand" href="index.php">God's Own Country</a>

            <ul>
                <li><a class="nav-link" href="index.php">Home</a></li>
                <li><a class="nav-link" href="about.php">About Us</a></li>
                <li><a class="nav-link" href="login.php">Log In</a></li>
                <li><a class="nav-link" href="signup.php">Sign Up</a></li>
            </ul>
        </nav>
        <!--login -->
        <div class="container">
    <h1>Sign Up</h1>
            <div class="row">
            
                <div class ="col-md-6">
    
                <form action="signup.php" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="user" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Email ID</label>
                    <input type="text" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label> Confirm Password</label>
                    <input type="password" name="cpassword" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary"> Sign Up </button>
                </form>
            </div>
            </div>
        </div>
    </div>
    <footer>
        <p>Copyright Team I | 2022 | Gods Own Country</p>
    </footer>
</body>
</html>