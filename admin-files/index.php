<?php
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection,"eventon");

    if(isset($_POST['login'])){
        $query = "select * from users where email = '$_POST[email]' AND password = '$_POST[password]'";
        $query_run = mysqli_query($connection,$query);
        if(mysqli_num_rows($query_run)){
            while($row = mysqli_fetch_assoc($query_run)){
                echo "<script>
                window.location.href = 'admin_dashboard.php';
                </script>";
            }
        }
        else{
            echo "<script>alert('Please Enter correct email id and password');
            window.location.href = 'index.php';
            </script>";
        }
    }    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>EventON</title>
        <link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
        <script src="../bootstrap-4.4.1/js/bootstrap.min.js" charset="utf-8"></script>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <div class="row" id="header">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                 <h3>EventON</h3>
            </div>
            <div class="col-md-4">
            </div>
        </div>



        <section id="login-form">
            <div class="row">
                <div class="col-md-4 m-auto block">
                    <center><h4>Admin login form</h4></center>
                    <form action="index.php" method="post">
                        <div class="form-group">
                           <label>Email ID:</label>
                            <input class="form-control" type="text" name="email" placeholder="enter your email">
                    
                </div>
                <div class="form-group">
                           <label>password:</label>
                            <input class="form-control" type="password" name="password" placeholder="enter your password">
                </div>
                <button class="btn btn-primary" type="submit" name="login">login</button>
               </form>
               <a href="register.php">click here to register</a>
              </div>
            </div>
        </section>
    </body>
</html>