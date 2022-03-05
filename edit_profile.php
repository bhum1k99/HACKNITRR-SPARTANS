<?php
    session_start();
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection,"eventon");
    $fname = "";
    $lname = "";
    $email = "";
    $password = "";
    $semester = "";
    $branch = "";
    $query = "select * from users where email = '$_SESSION[email]'";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run)){
        $fname = $row['fname'];
        $lname = $row['lname'];
        $email = $row['email'];
        $password = $row['password'];
        $semester = $row['semester'];
        $branch = $row['branch'];
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form action="" method="post">
            <div class="form-group">
                <label>First Name:</label>
                <input type="text" class="form-control" name="fname" value="<?php echo $fname;?>">
            </div>
            <div class="form-group">
                <label>Last Name:</label>
                <input type="text" class="form-control" name="lname" value="<?php echo $lname;?>">
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="text" class="form-control" name="email" value="<?php echo $email;?>">
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input type="text" class="form-control" name="password" value="<?php echo $password;?>">
            </div>
            <div class="form-group">
                <label>Select Semester:</label>
                <select class="form-control" name="semester" required>">
                    <option><?php echo $class;?></option>
                    <option>First</option>
                    <option>Second</option>
                    <option>Third</option>
                    <option>Fourth</option>
                    <option>Fifth</option>
                    <option>Sixth</option>
                    <option>Seventh</option>
                    <option>Eigth</option>
                </select>
            </div>
            <div class="form-group">
                <label>Select Branch:</label>
                <select class="form-control" name="branch" required>">
                    <option><?php echo $class;?></option>
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
            <button type="submit" name="update_profile" class="btn btn-primary">Update</button>
        </form>
    </body>
</html>
