<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hari blogs</title>
</head>
<style>
    html {
        height: 100%;
    }

    body {
        overflow: hidden;
        background: #bcdee7 url("../img/bg.jpg") no-repeat center center fixed;
        background-size: cover;
        position: fixed;
        padding: 0px;
        margin: 0px;
        width: 100%;
        height: 100%;
        font: normal 14px/1.618em "Roboto", sans-serif;
        -webkit-font-smoothing: antialiased;
    }

    body:before {
        content: "";
        height: 0px;
        padding: 0px;
        border: 130em solid #313440;
        position: absolute;
        left: 50%;
        top: 100%;
        z-index: 2;
        display: block;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        -webkit-animation: puff 0.5s 1.8s cubic-bezier(0.55, 0.055, 0.675, 0.19) forwards, borderRadius 0.2s 2.3s linear forwards;
        animation: puff 0.5s 1.8s cubic-bezier(0.55, 0.055, 0.675, 0.19) forwards, borderRadius 0.2s 2.3s linear forwards;
    }

    h1,
    h2 {
        font-weight: 500;
        margin: 0px 0px 5px 0px;
    }

    h1 {
        font-size: 24px;
    }

    h2 {
        font-size: 16px;
    }

    p {
        margin: 0px;
    }

    .profile-card {
        background: #FFB300;
        width: 56px;
        height: 56px;
        position: absolute;
        left: 50%;
        top: 50%;
        z-index: 2;
        overflow: hidden;
        opacity: 0;
        margin-top: 70px;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        -webkit-border-radius: 50%;
        border-radius: 50%;
        -webkit-box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16), 0px 3px 6px rgba(0, 0, 0, 0.23);
        box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16), 0px 3px 6px rgba(0, 0, 0, 0.23);
        -webkit-animation: init 0.5s 0.2s cubic-bezier(0.55, 0.055, 0.675, 0.19) forwards, moveDown 1s 0.8s cubic-bezier(0.6, -0.28, 0.735, 0.045) forwards, moveUp 1s 1.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards, materia 0.5s 2.7s cubic-bezier(0.86, 0, 0.07, 1) forwards;
        animation: init 0.5s 0.2s cubic-bezier(0.55, 0.055, 0.675, 0.19) forwards, moveDown 1s 0.8s cubic-bezier(0.6, -0.28, 0.735, 0.045) forwards, moveUp 1s 1.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards, materia 0.5s 2.7s cubic-bezier(0.86, 0, 0.07, 1) forwards;
    }

    .profile-card header {
        width: 179px;
        height: 280px;
        padding: 40px 20px 30px 20px;
        display: inline-block;
        border-right: 2px dashed #EEEEEE;
        background: #FFFFFF;
        color: #000000;
        margin-top: 50px;
        opacity: 0;
        text-align: center;
        -webkit-animation: moveIn 1s 3.1s ease forwards;
        animation: moveIn 1s 3.1s ease forwards;
    }

    .profile-card header h1 {
        color: #FF5722;
    }

    .profile-card header a {
        display: inline-block;
        text-align: center;
        position: relative;
        margin: 25px 30px;
    }

    .profile-card header a:after {
        position: absolute;
        content: "";
        bottom: 3px;
        right: 3px;
        width: 20px;
        height: 20px;
        border: 4px solid #FFFFFF;
        -webkit-transform: scale(0);
        transform: scale(0);
        background: -webkit-linear-gradient(top, #2196F3 0%, #2196F3 50%, #FFC107 50%, #FFC107 100%);
        background: linear-gradient(#2196F3 0%, #2196F3 50%, #FFC107 50%, #FFC107 100%);
        -webkit-border-radius: 50%;
        border-radius: 50%;
        -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
        box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
        -webkit-animation: scaleIn 0.3s 3.5s ease forwards;
        animation: scaleIn 0.3s 3.5s ease forwards;
    }

    .profile-card header a>img {
        width: 120px;
        max-width: 100%;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        -webkit-transition: -webkit-box-shadow 0.3s ease;
        transition: box-shadow 0.3s ease;
        -webkit-box-shadow: 0px 0px 0px 8px rgba(0, 0, 0, 0.06);
        box-shadow: 0px 0px 0px 8px rgba(0, 0, 0, 0.06);
    }

    .profile-card header a:hover>img {
        -webkit-box-shadow: 0px 0px 0px 12px rgba(0, 0, 0, 0.1);
        box-shadow: 0px 0px 0px 12px rgba(0, 0, 0, 0.1);
    }

    .profile-card .profile-bio {
        width: 175px;
        height: 180px;
        display: inline-block;
        padding: 50px 20px 30px 20px;
        background: #FFFFFF;
        color: #333333;
        margin-top: 50px;
        text-align: center;
        opacity: 0;
        -webkit-animation: moveIn 1s 3.1s ease forwards;
        animation: moveIn 1s 3.1s ease forwards;
    }

    .profile-social-links {
        width: 218px;
        display: inline-block;

        margin: 0px;
        padding: 15px 20px;
        background: #FFFFFF;
        margin-top: 50px;
        text-align: center;
        opacity: 0;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        -webkit-animation: moveIn 1s 3.1s ease forwards;
        animation: moveIn 1s 3.1s ease forwards;
    }

    .profile-social-links li {
        list-style: none;
        margin: -5px 0px 0px 0px;
        padding: 0px;
        float: left;
        width: 25%;
        text-align: center;
    }

    .profile-social-links li a {
        display: inline-block;
        color: red;
        width: 24px;
        height: 24px;
        padding: 6px;
        position: relative;
        overflow: hidden !important;
        -webkit-border-radius: 50%;
        border-radius: 50%;
    }

    .profile-social-links li a i {
        position: relative;
        z-index: 1;
    }

    .profile-social-links li a img,
    .profile-social-links li a svg {
        width: 24px;
    }

    @-webkit-keyframes init {
        0% {
            width: 0px;
            height: 0px;
        }

        100% {
            width: 56px;
            height: 56px;
            margin-top: 0px;
            opacity: 1;
        }
    }

    @keyframes init {
        0% {
            width: 0px;
            height: 0px;
        }

        100% {
            width: 56px;
            height: 56px;
            margin-top: 0px;
            opacity: 1;
        }
    }

    @-webkit-keyframes puff {
        0% {
            top: 100%;
            height: 0px;
            padding: 0px;
        }

        100% {
            top: 50%;
            height: 100%;
            padding: 0px 100%;
        }
    }

    @keyframes puff {
        0% {
            top: 100%;
            height: 0px;
            padding: 0px;
        }

        100% {
            top: 50%;
            height: 100%;
            padding: 0px 100%;
        }
    }

    @-webkit-keyframes borderRadius {
        0% {
            -webkit-border-radius: 50%;
        }

        100% {
            -webkit-border-radius: 0px;
        }
    }

    @keyframes borderRadius {
        0% {
            -webkit-border-radius: 50%;
        }

        100% {
            border-radius: 0px;
        }
    }

    @-webkit-keyframes moveDown {
        0% {
            top: 50%;
        }

        50% {
            top: 40%;
        }

        100% {
            top: 100%;
        }
    }

    @keyframes moveDown {
        0% {
            top: 50%;
        }

        50% {
            top: 40%;
        }

        100% {
            top: 100%;
        }
    }

    @-webkit-keyframes moveUp {
        0% {
            background: #FFB300;
            top: 100%;
        }

        50% {
            top: 40%;
        }

        100% {
            top: 50%;
            background: #E0E0E0;
        }
    }

    @keyframes moveUp {
        0% {
            background: #FFB300;
            top: 100%;
        }

        50% {
            top: 40%;
        }

        100% {
            top: 50%;
            background: #E0E0E0;
        }
    }

    @-webkit-keyframes materia {
        0% {
            background: #E0E0E0;
        }

        50% {
            -webkit-border-radius: 4px;
        }

        100% {
            width: 440px;
            height: 280px;
            background: #FFFFFF;
            -webkit-border-radius: 4px;
        }
    }

    @keyframes materia {
        0% {
            background: #E0E0E0;
        }

        50% {
            border-radius: 4px;
        }

        100% {
            width: 440px;
            height: 280px;
            background: #FFFFFF;
            border-radius: 4px;
        }
    }

    @-webkit-keyframes moveIn {
        0% {
            margin-top: 50px;
            opacity: 0;
        }

        100% {
            opacity: 1;
            margin-top: -20px;
        }
    }

    @keyframes moveIn {
        0% {
            margin-top: 50px;
            opacity: 0;
        }

        100% {
            opacity: 1;
            margin-top: -20px;
        }
    }

    @-webkit-keyframes scaleIn {
        0% {
            -webkit-transform: scale(0);
        }

        100% {
            -webkit-transform: scale(1);
        }
    }

    @keyframes scaleIn {
        0% {
            transform: scale(0);
        }

        100% {
            transform: scale(1);
        }
    }

    @-webkit-keyframes ripple {
        0% {
            transform: scale3d(0, 0, 0);
        }

        50%,
        100% {
            -webkit-transform: scale3d(1, 1, 1);
        }

        100% {
            opacity: 0;
        }
    }

    @keyframes ripple {
        0% {
            transform: scale3d(0, 0, 0);
        }

        50%,
        100% {
            transform: scale3d(1, 1, 1);
        }

        100% {
            opacity: 0;
        }
    }

    @media screen and (min-aspect-ratio: 4/3) {
        body {
            background-size: cover;
        }

        body:before {
            width: 0px;
        }

        @-webkit-keyframes puff {
            0% {
                top: 100%;
                width: 0px;
                padding-bottom: 0px;
            }

            100% {
                top: 50%;
                width: 100%;
                padding-bottom: 100%;
            }
        }

        @keyframes puff {
            0% {
                top: 100%;
                width: 0px;
                padding-bottom: 0px;
            }

            100% {
                top: 50%;
                width: 100%;
                padding-bottom: 100%;
            }
        }
    }

    @media screen and (min-height: 480px) {
        .profile-card header {
            width: auto;
            height: auto;
            padding: 30px 20px;
            display: block;
            float: none;
            border-right: none;
        }

        .profile-card .profile-bio {
            width: auto;
            height: auto;
            padding: 15px 20px 30px 20px;
            display: block;
            float: none;
        }

        .profile-social-links {
            width: 100%;
            display: block;
            float: none;
        }

        @-webkit-keyframes materia {
            0% {
                background: #E0E0E0;
            }

            50% {
                -webkit-border-radius: 4px;
            }

            100% {
                width: 280px;
                height: 440px;
                background: #FFFFFF;
                -webkit-border-radius: 4px;
            }
        }

        @keyframes materia {
            0% {
                background: #E0E0E0;
            }

            50% {
                border-radius: 4px;
            }

            100% {
                width: 280px;
                height: 440px;
                background: #FFFFFF;
                border-radius: 4px;
            }
        }
    }
</style>

<body>

<?php
     
     include 'cons.php';
     $id = $_REQUEST['cid'];
     $query = "select * from comments where id='$id' ";
      $result1 = mysqli_query($conn, $query);
      if ($row1 = mysqli_fetch_assoc($result1)) {
        $first_name = $row1['firstN'];
        $last_name = $row1['lastN'];
        $comment = $row1['comment'];

   
    
      }
      ?>


        <aside class="profile-card">
            <header>
                <div class="w3-top">
                    <div class="w3-bar w3-white w3-wide w3-padding w3-card">
                        <p class="w3-bar-item w3-button"><b>HARI</b> Blogs</p>
                    </div>
                </div>
                <br>
                <h2>
                    Manage Comments
                </h2>
                <h1>
                    <?php echo " " .  $row1['firstN']  . " " .  $row1['lastN']  ?>
                </h1>
            </header>
            <div class="profile-bio">
                <p>
                    <?php echo "<b> " . $row1['firstN'] . " " .$row1['lastN']  . ",</b> post a comment <b>" . $row1['comment'] . "</b> on Blog. If you want to approve this comment click on Accpet button and for not approve click on Reject button. " ?>
                </p>
                <br>
                <form name="story" action=" " method="post">
                    <input type="radio" id="Accpet" name="status" value="Accpet" required="required">
                      <label for="Accpet" style="color: green;"><b>Accpet</b></label>
                      <input type="radio" id="Reject" name="status" value="Reject" required="required">
                      <label for="Reject" style="color: red;"><b>Reject</b></label><br>
                    <input type="submit" value="submit" name="submit" style="color: blue;">
                </form>
                <a href="http://localhost/blogs/manage.php"> Back </a>
            </div>
            <?php

$id = $_REQUEST['cid'];

if (isset($_POST['submit'])) {


    $status = $_REQUEST['status'];
    $statusquery = "UPDATE comments SET cmtStatus = '$status' WHERE id = $id ";

    if (mysqli_query($conn, $statusquery)) {
    ?>
        <script>
            alert('Admin Accpet/Reject your comment...!!');
        </script>

<?php
    } else {
        echo "ERROR" . mysqli_error($conn);
    }
}
?>
           
</body>

</html>