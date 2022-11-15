<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>hari blogs</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script type="text/javascript">
    function validate() {
      var hasErrors = false;

      var Comment = document.forms["blog"]["comment"].value;
      console.log(Comment);
      if (Comment == "") {
        document.getElementById("Comment_error").innerHTML = "* Comment is a required field";
        hasErrors = true;
      } else if (Comment.length < 5 || Comment.length > 100) {
        document.getElementById("Comment_error").innerHTML = "* Comment must be between 5 and 100 characters in length";
        hasErrors = true;
      } else
        document.getElementById("Comment_error").innerHTML = "✓";
      return !hasErrors;
    }
  </script>
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
  </style>
</head>

<body>
  <?php session_start();
  include 'cons.php';
  $id = $_REQUEST['pid'];
  ?>
  <div class="w3-top">
    <div class="w3-bar w3-white w3-wide w3-padding w3-card">
      <a href="#home" class="w3-bar-item w3-button"><b>HARI</b> Blogs</a>
    </div>
  </div>
  <?php

  $selectquery = "select * from addblog  where id='$id' ";

  $result = mysqli_query($conn, $selectquery);

  if ($row = mysqli_fetch_assoc($result)) {
    $title = $row['Title'];
    $categories = $row['Categories'];
    $Filename = $row['image'];
    $Blog = $row['blog'];
    $FBlog = $row['fullblog'];
    $Time = $row['time']; ?>
    <img src="<?php echo ($Filename); ?>" style="width:100%">
    <div class="w3-container w3-white">
      <b>
        <h4><?php echo " " . $title; ?></h4>
        <p style="color: #454545;"><?php echo "  categorie is " .   $categories;; ?> </p>
      </b>
      <p style="color: #454545;"><?php echo "Upload on " .  $Time;; ?> </p>
      <p><?php echo " " . $Blog . $FBlog; ?></p>
      <div class="w3-container w3-white">
      </div>
    <?php
  } else {
    echo "No blog data found";
  } ?>

    <div class="form-floating">
      <?php
      if (!empty($_SESSION['firstName'])) {
        if ($_SESSION['firstName']) {

      ?>
          <form class="modal-content animate" name="blog" action="" onsubmit="return validate();" method="post">
            <span class="error" id="Comment_error"></span><br><br>
            <label for="floatingTextarea"><b>Add Comment</b></label>
            <input type="hidden" id="uids" name="uids" value="">
           <input type="text" class="form-control" placeholder="Leave a comment here" name="comment" id="comment"></input>
            <input type="submit" value="submit" name="submit">
          </form>
      <?php
        }
      } else {
        echo  '<h4 style="Color:red"><b>Note:-</b> In order to comment one has to Login first.</h4>';
      }
      ?>
    </div>
    <br>
    <h4>
      <span class="w3-tag w3-black w3-margin-bottom">Comments</span>
    </h4>
    <div>
      <?php
      $query = "select * from comments where uids='$id' and cmtStatus='Accpet' ";
      $result1 = mysqli_query($conn, $query);
      if ($row1 = mysqli_fetch_assoc($result1)) {
        $first_name = $row1['firstN'];
        $last_name = $row1['lastN'];
        $comment = $row1['comment'];

        do {
          if (isset($row1['comment'])) {
            echo  "<h5><b> " . $row1['firstN'] . " " . $row1['lastN'] . "</b></h5>" . $row1['comment'];
            echo  "<br> ";
          } else echo 'Add some comments';
        } while ($row1 = mysqli_fetch_array($result1));
      }
      ?>
    </div>
    </p>
    </div>
    </div>
    <?php

    if (isset($_POST['submit'])) {
      $comment = $_REQUEST['comment'];
      $uid = $_REQUEST['uids'];
      $uid = $id;
      $user = $_SESSION['newid'];
      $user1 = "select * from singupacc where id='$user' ";
      $out = mysqli_query($conn, $user1);
      if ($ro = mysqli_fetch_assoc($out)) {
        $first_name = $ro['fname'];
        $last_name = $ro['lname'];
        $cmtStatus = 'Reject';
        $query = "insert into comments(firstN,lastN,comment,cmtStatus,uids) values('$first_name',' $last_name','$comment','$cmtStatus','$uid') ";
        if (mysqli_query($conn, $query)) {
    ?>
          <script>
            // alert('Comment post successfully.');			
          </script>
    <?php
        } else {
          echo "ERROR" . mysqli_error($conn);
        }
      }
    }

    ?>
    <div class="w3-container w3-white">

      <footer class="w3-center w3-black w3-padding-16">

        <p>Powered by <a href="#" title="hari" target="_blank" class="w3-hover-text-green">HARI Pvt. Ltd.</a></p>
      </footer>
</body>

</html>