<?php

session_start();
$gid = $_SESSION['newid'];

print_r($gid);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hari blogs</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    * {
        box-sizing: border-box;
    }

    .required {
        color: #7FFF00;
    }

    .error {
        color: #FF0000;
    }

    *,
    *:before,
    *:after {
        margin: 0;
        padding: 0;
        font-family: inherit;
        box-sizing: border-box;
    }

    #main {
        width: max-content;
        margin: 40px auto;
        font-family: "Segoe UI", sans-serif;
        padding: 25px 28px;
        background: #151414;
        border-radius: 4px;
        border: 1px solid #302d2d;
        animation: popup 0.4s cubic-bezier(0.68, -0.55, 0.27, 1.55);
    }

    @keyframes popup {
        0% {
            transform: scale(0.2);
            opacity: 0;
        }

        100% {
            transform: scale(1);
            opacity: 1;
        }
    }

    h2 {
        text-align: center;
        font-size: 28px;
        margin-bottom: 20px;
        font-weight: 400;
        color: #e7e7e7;
    }

    h3 {
        text-align: center;
        font-size: 28px;
        margin-bottom: 20px;
        font-weight: 400;
        color: red;
    }

    .input-parent {
        display: block;
        margin-bottom: 20px;
    }

    label {
        display: block;
        font-size: 16px;
        margin-bottom: 8px;
        color: #a4a4a4;
    }

    .input-parent input {
        padding: 10px 8px;
        width: 100%;
        font-size: 16px;
        background: #323131;
        border: none;
        color: #c7c7c7;
        border-radius: 4px;
        outline: none;
        transition: all 0.2s ease;
    }

    .input-parent input:hover {
        background: #404040;
    }

    .input-parent input:focus {
        box-shadow: 0px 0px 0px 1px #0087ff;
    }

    button {
        padding: 10px 18px;
        font-size: 15px;
        background: #1a3969;
        width: 100%;
        border: none;
        border-radius: 4px;
        color: #f4f4f4;
        transition: all 0.2s ease;
    }

    button:hover {
        opacity: 0.9;
    }

    button:focus {
        box-shadow: 0px 0px 0px 3px black;
    }

    body {
        background: #1c1b1b;
    }
</style>


<script type="text/javascript">
    function validate() {
        var hasErrors = false;
        var first_name = document.forms["registration"]["first_name"].value;
        if (first_name == "") {
            document.getElementById("first_name_error").innerHTML = "* Please enter valid name";
            hasErrors = true;
        } else
            document.getElementById("first_name_error").innerHTML = "✓";

        var last_name = document.forms["registration"]["last_name"].value;
        if (last_name == "") {
            document.getElementById("last_name_error").innerHTML = "* Last Name is a required field";
            hasErrors = true;
        } else
            document.getElementById("last_name_error").innerHTML = "✓";

        var username = document.forms["registration"]["username"].value;
        if (username == "") {
            document.getElementById("username_error").innerHTML = "* Username is a required field";
            hasErrors = true;
        } else if (username.length < 3 || username.length > 20) {
            document.getElementById("username_error").innerHTML = "* Username must be between 3 and 20 characters in length";
            hasErrors = true;
        } else
            document.getElementById("username_error").innerHTML = "✓";

        var email = document.forms["registration"]["email"].value;
        if (email == "") {
            document.getElementById("email_error").innerHTML = "* Email is a required field";
            hasErrors = true;
        } else if (email.length > 40) {
            document.getElementById("email_error").innerHTML = "* Email must be less than 40 characters in length.";
            hasErrors = true;
        } else if (email.indexOf("@") == -1) {
            document.getElementById("email_error").innerHTML = "* A valid e-mail address is required";
            hasErrors = true;
        } else
            document.getElementById("email_error").innerHTML = "✓";

        var password = document.forms["registration"]["password"].value;
        if (password == "") {
            document.getElementById("password_error").innerHTML = "* Password is a required field";
            hasErrors = true;
        } else if (password.length < 8 || password.length > 20) {
            document.getElementById("password_error").innerHTML = "* Passwords must be between 8 and 20 characters in length";
            hasErrors = true;
        } else if (password.search(/[0-9]/) == -1) {

            document.getElementById("password_error").innerHTML = "* Passwords must have one Integer value";
            hasErrors = true;
        } else if (password.search(/[a-z]/) == -1) {
            document.getElementById("password_error").innerHTML = "* Passwords must atlest one lower case letter ";
            hasErrors = true;
        } else if (password.search(/[A-Z]/) == -1) {
            document.getElementById("password_error").innerHTML = "* Passwords must atlest one upper case letter ";
            hasErrors = true;
        } else if (password.search(/[!\@\#\$\%\^\&\*\*]/) == -1) {
            document.getElementById("password_error").innerHTML = "* Passwords must have ( ! , @ , # , $ , % , ^ , & , * ) one of this special characters ";
            hasErrors = true;
        } else
            document.getElementById("password_error").innerHTML = "✓";
        return !hasErrors;
    }
</script>
</script>
</head>
<body>
    <!-- Navbar (sit on top) -->
    <div class="w3-top">
        <div class="w3-bar w3-white w3-wide w3-padding w3-card">
            <a href="#" class="w3-bar-item w3-button"><b>HARI</b> Blogs</a>
            <!-- Float links to the right. Hide them on small screens -->
            <div class="w3-right w3-hide-small">
            </div>
        </div>
    </div>
    </div>
    <br>
    <div class="w3-content" style="max-width:1400px">
        <br>
        </header>
        <form action="" name="registration" id="main" onsubmit="return validate();" method="post">
            <h2>sing-up your account</h2>
            <div class="input-parent">
                <span class="error" id="first_name_error"></span><br><br>
                <label for="firstname">First Name</label>
                <input type="text" id="first_name" name="first_name">
            </div>
            <div class="input-parent">
                <span class="error" id="last_name_error"></span><br><br>
                <label for="username">Last Name</label>
                <input type="text" id="last_name" name="last_name">
            </div>
            <div class="input-parent">
                <span class="error" id="username_error"></span><br><br>
                <label for="username">Username</label>
                <input type="text" id="username" name="username">
            </div>
            <div class="input-parent">
                <span class="error" id="email_error"></span><br><br>
                <label for="username">Email</label>
                <input type="text" id="email" name="email">
            </div>
            <div class="input-parent">
                <span class="error" id="password_error"></span><br><br>
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
            </div>
            <div class="input-parent">
                <label class="col-sm-3 control-label">Select your Type</label>
                <div class="col-sm-6">
                    <span class="error" id="role_error"></span><br><br>
                    <select class="form-control" name="role" required>
                        <option value="" selected="selected"> select role</option>
                        <option value="Admin">Admin</option>
                        <option value="Author">Author</option>
                        <option value="User">User</option>
                    </select>
                </div>
                <input type="hidden" name="idblog" id="idblog" />
                <br>
                <button type="submit">singup</button>
                <br>
                <div class="input-parent">
                    <label for="username">Already have account <a href="http://localhost/blogs/loginauthor.php">click</a></label>
                    <div>
        </form>
        <?php
        if (isset($_REQUEST['first_name']) && isset($_REQUEST['last_name']) && isset($_REQUEST['email']) && isset($_REQUEST['username']) && isset($_REQUEST['password'])) {

            $conn = mysqli_connect("localhost", "root", "", "blogs_prorject");
            if ($conn === false) {
                die("ERROR: Could not connect. "
                    . mysqli_connect_error());
            }
            $f_name = $_REQUEST['first_name'];
            $l_name = $_REQUEST['last_name'];
            $email = $_REQUEST['email'];
            $u_name = $_REQUEST['username'];
            $password = $_REQUEST['password'];
            $role = $_REQUEST['role'];
            $accstatus = 'Reject';

            $check_email = mysqli_query($conn, "SELECT email FROM singupacc where email = '$email' ");
            if (mysqli_num_rows($check_email) > 0) {
              echo '<span style="color:#FF0000;text-align:center; ">Email Already exists</span>';
            } else {
                $sql = "SELECT uname FROM singupacc WHERE uname='{$u_name}'";
                $result = mysqli_query($conn, $sql) or die("Query unsuccessful");
                if (mysqli_num_rows($result) > 0) {
                    echo '<span style="color:#FF0000;text-align:center; ">Username Already exists</span>';
                } else {

                    $sql = "INSERT INTO singupacc(id,fname,lname,email,uname,pass,rol,accStatus) VALUES (null, '$f_name','$l_name','$email','$u_name','$password','$role','$accstatus')";

                    if (mysqli_query($conn, $sql)) {


                        echo "<h3>data stored in a database successfully.</h3>";
                    } else {
                        echo "ERROR" . mysqli_error($conn);
                    }
                }
            }
            mysqli_close($conn);
        }
        ?>
</body>

</html>