<?php
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection,"eventon");

    if(isset($_POST['register'])){
        $query = "insert into users 
        values(null, '$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[password]','$_POST[semester]','$_POST[branch]')";
        $query_run = mysqli_query($connection,$query);
        if($query_run){
            echo "<script>alert('Registration successfull...You may now login.');
            window.location.href = 'index.php';
            </script>";

        }
        else{
            echo "<script>alert('Registration failed...try again.');
            window.location.href = 'register.php';
            </script>";

        }
    }    
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>EventON</title>
        <!-- Bootstrap files -->
        <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
        <script src="bootstrap-4.4.1/js/bootstrap.min.js" charset="utf-8"></script>
        <!-- CSS File -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
       <!-- Header section code start here -->
       <div class="row" id="header">
           <div class="col-md-4">
           </div>
           <div class="col-md-4">
               <h3>EventON</h3>
           </div>
           <div class="col-md-4">
           </div>
        </div>

        <!-- Login form code starts here -->
        <section id="login_form">
            <div class="row">
                <div class="col-md-4 m-auto block">
                    <center><h4>Registration form</h4></center>
                    <form action="" method="post">
                    <div class="form-group">
                            <label>First Name</label>
                                <input class="form-control" type="text" name="fname" placeholder="Enter your First Name">
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                                <input class="form-control" type="text" name="lname" placeholder="Enter your Last Name">
                        </div>
                        <div class="form-group">
                            <label>Email ID:</label>
                                <input class="form-control" type="text" name="email" placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <label>Password:</label>
                                <input class="form-control" type="password" name="password" placeholder="Enter your Password">
                        </div>
                        <div class="form-group">
                            <label>Select your semester:</label>
                                <select class="form-control" name="semester">
                                    <option>-Select-</option>
                                    <option>First</option>
                                    <option>Second</option>
                                    <option>Third</option>
                                    <option>Fourth</option>
                                    <option>Fifth</option>
                                    <option>Sixth</option>
                                    <option>Seventh</option>
                                    <option>Eight</option>
                                </select>
                        </div>
                        <div class="form-group">
                            <label>Select your Branch:</label>
                                <select class="form-control" name="branch">
                                    <option>-Select-</option>
                                    <option>Bio Medical Engineering</option>
                                    <option>Bio Technology</option>
                                    <option>Chemical Engineering</option>
                                    <option>Civil Engineering</option>
                                    <option>Computer Science & Engineering</option>
                                    <option>Electrical Engineering</option>
                                    <option>Electronics and Communication Engineering</option>
                                    <option>Information Technology</option>
                                    <option>Mechanical Engineering</option>
                                    <option>Mining Engineering</option>
                                    <option>Metallurgical and Materials Engineering</option>
                                </select>
                        </div>
                        <button class="btn btn-primary" type="submit" name="register">Register</button> 
                    </form>
                    <a href="index.php">Click here to login</a>
                </div>
            </div>
        </section>        
     </body>
</html>