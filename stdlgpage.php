
<!DOCTYPE html>
<html lang="en">
<?php

$ShowAlert = false; // Initializes a variable to store an alert message if needed.
if ($_SERVER["REQUEST_METHOD"] == "POST") { // Checks if the request method is POST, which means a form has been submitted.
 include 'db_conn.php'; // Establishes a connection to the MySQL database using the provided credentials.

    // Check connection
    if (!$conn) { // Checks if the connection to the database failed.
        die("Connection failed: " . mysqli_connect_error()); // If the connection fails, the script stops executing and displays an error message.
    }

    $Email = mysqli_real_escape_string($conn, $_POST['Email']); // Escapes special characters in the email input to prevent SQL injection.
    $Password = mysqli_real_escape_string($conn, $_POST['Password']); // Escapes special characters in the password input to prevent SQL injection.

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("select * FROM stdreg WHERE email=? AND password=?"); // Prepares an SQL statement for execution to select a user based on email and password.
    $stmt->bind_param("ss", $Email, $Password); // Binds the user-provided email and password to the prepared statement as parameters.
    $stmt->execute(); // Executes the prepared statement.
    $rs = $stmt->get_result(); // Retrieves the result set from the executed statement.

    if ($row = $rs->fetch_assoc()) { // Fetches a result row as an associative array. If a row is found, it means the user credentials are correct.
            // sending email data to the profile.php
            session_start(); // Start the session
            $_SESSION['email'] = "$Email"; // Store data in session variables
            $_SESSION['hide-lg-regist'] = false; // this data is use to 'hide' 'login and register' btn and bring 'logout' btn when an student is 'logedin'.

        header("location:profile.php"); // Redirects the user to "index.php".
        exit; // Stops the script execution after the redirect to ensure no further code is executed.
    } else {
        $ShowAlert = "Invalid username or password"; // Sets an alert message if the user credentials are incorrect.
        echo $ShowAlert; // Displays the alert message.
    }
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students login</title>
    <link rel="stylesheet" href="list.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <style>
    </style>
</head>
<body>
    <div class="blur"></div>
    <div class="container">
        <div class="block">
            <h1 class="heading">PLACEMENT PORTAL</h1>
                <div class="inner_block">
                    <div class="box">
                        <p class="p">Student Login</p>
                        <?php
                        if($ShowAlert)
                        {
                            echo"<p class='p1'>invalid username or password</p>";
                        }
                        ?>
                        <form action="stdlgpage.php" method="POST">
                        <div class="box1">
                            <p>Email</p>
                            <div class="block1">
                                <input style="font-family: 'Font Awesome 5 Free';font-weight: 700" type="text"
                                    placeholder="&#xf0e0; Enter Email" name="Email" required>
                            </div>
                            <p>Password</p>
                            <div class="block1">
                                <input style="font-family: 'Font Awesome 5 Free';font-weight: 700" type="text"
                                    placeholder="&#xf023; Enter Password" name="Password" required>
                            </div>
                           <div class="submit"><input type="submit" value="Login" class="btn"></div>
                        </div>
                    </div>
                    </form>
                </div>
        </div>
    </div>
</body>
</html>