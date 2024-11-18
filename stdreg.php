<!DOCTYPE html>
<html lang="en">
<?php
$ShowAlert=false;
$ShowAlert1=false;
$ShowAlert2=false;
$ShowAlert3=false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];
    $CPassword=$_POST['CPassword'];
    $Uname=$_POST['Uname'];
   include 'db_conn.php';
    // $exists=false;
    if(($Email!="") && ($Password!="") && ($CPassword!="") && ($Uname!="")){
        if($CPassword==$Password)
    {
        $check = "select*from stdreg where email='$Email'";
        $result = mysqli_query($conn,$check);
        $count = mysqli_num_rows($result);
        $row=mysqli_fetch_array($result);
            if($count>0)
        {
           $ShowAlert2="Email Already Exist";
        }
            else{
            $sql="insert into stdreg(name,email,password) value('$Uname','$Email','$Password')";
            $rs=mysqli_query($conn,$sql);
            // Insert the new profile entry
                $std_id = "select*from stdreg where email='$Email'";
                $res = mysqli_query($con,$std_id);
                $row=mysqli_fetch_array($res);
            $q = $con->prepare("insert into profiles (std_id, name, prons, email, course, fos, grad) VALUES (?, ?, '', ?, '', '', null)"); // Prepares an SQL statement to insert a new row into the 'profiles' table.
            $q->bind_param("iss", $row['std_id'], $Uname, $Email); // Binds the user's ID and email to the SQL statement parameters.
            $q->execute(); // Executes the prepared statement to insert the data into the 'profiles' table.

            // sending email data to the profile.php
            session_start(); // Start the session

          // Store data in session variables
          $_SESSION['email'] = "$Email";
          $_SESSION['name'] = "$Uname";
          $_SESSION['std_id'] = "$row[std_id]";
        
          // Redirect to another page
            header("location:profile.php");
            exit;
        }
    }
        else{
        $ShowAlert="Password Do Not Match";
    }
    }
    else{
    $ShowAlert1="field can not be empty";
}
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Placement</title>
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <style>
    </style>
    
</head>

<body>
    <div class="blur"></div>
    <div class="container">
        <div class="block">
            <h1 class="heading">PLACEMENT PORTAL</h1>
            <div class="blk">
                <div class="inner_block">
                    <div class="box">
                        <p class="para">Student Register</p>
                        <?php
                        if($ShowAlert)
                        {
                            echo"<p class='p1'>$ShowAlert</p>";
                        }
                        if($ShowAlert1)
                        {
                            echo"<p class='p1'>$ShowAlert1</p>";
                        }
                        if($ShowAlert2)
                        {
                            echo"<p class='p1'>$ShowAlert2</p>";
                        }
                        if($ShowAlert3)
                        {
                            echo"<p class='p1'>$ShowAlert3</p>";
                        }
                        ?>
                        <form action="stdreg.php" method="POST">
                        <div class="box1">
                            <p>User Name</p>
                            <div class="block1">
                                <input style="font-family: 'Font Awesome 5 Free';font-weight: 700" type="text"
                                    placeholder="&#xf007;  Enter User Name" name="Uname" required>
                            </div>
                            <p>Email</p>
                            <div class="block1">
                                <input style="font-family: 'Font Awesome 5 Free';font-weight: 700" type="email"
                                    placeholder="&#xf0e0;  Enter Email" name="Email" required>
                            </div>
                            <p>Password</p>
                            <div class="block1">
                                <input style="font-family: 'Font Awesome 5 Free';font-weight: 700" type="password"
                                    placeholder="&#xf023;  Enter Password" name="Password" required>
                            </div>
                            <p>Confirm Password</p>
                            <div class="block1">
                                <input style="font-family: 'Font Awesome 5 Free';font-weight: 700" type="password"
                                    placeholder="&#xf023;  Confirm Password" name="CPassword" required>
                            </div>
                           <input type="submit" value="Register"class="btn">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
