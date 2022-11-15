<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    * {
      box-sizing: border-box;
    }

    input[type=text],
    select,
    textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
    }

    label {
      padding: 12px 12px 12px 0;
      display: inline-block;
    }

    input[type=submit] {
      background-color: #04AA6D;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      float: right;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }

    .container {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
    }

    .col-25 {
      float: left;
      width: 25%;
      margin-top: 6px;
    }

    .col-75 {
      float: left;
      width: 75%;
      margin-top: 6px;
    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {

      .col-25,
      .col-75,
      input[type=submit] {
        width: 100%;
        margin-top: 0;
      }
    }

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
  </style>
  <script type="text/javascript">
    function form() {
      var hasErrors = false;

      var Title = document.forms["blog"]["Title"].value;

      if (Title == "") {
        document.getElementById("Title_error").innerHTML = "* Title is a required field";
        hasErrors = true;
      } else if (Title.length < 2 || Title.length > 30) {
        document.getElementById("Title_error").innerHTML = "* Title must be between 2 and 30 characters in length";
        hasErrors = true;
      } else
        document.getElementById("Title_error").innerHTML = "✓";

      var Categories = document.forms["blog"]["Categories"].value;

      var Blog = document.forms["blog"]["Blog"].value;

      if (Blog == "") {
        document.getElementById("Blog_error").innerHTML = "* Blog is a required field";
        hasErrors = true;
      } else if (Blog.length < 10 || Blog.length > 100) {
        document.getElementById("Blog_error").innerHTML = "* Blog must be between 10 and 100 characters in length";
        hasErrors = true;
      } else
        document.getElementById("Blog_error").innerHTML = "✓";

      var fBlog = document.forms["blog"]["fBlog"].value;

      if (fBlog == "") {
        document.getElementById("fBlog_error").innerHTML = "* Full Blog is a required field";
        hasErrors = true;
      } else if (fBlog.length < 50 || fBlog.length > 1000) {
        document.getElementById("fBlog_error").innerHTML = "* Full Blog must be between 50 and 1000 characters in length";
        hasErrors = true;
      } else
        document.getElementById("fBlog_error").innerHTML = "✓";
      return !hasErrors;

    }
  </script>

</head>

<body>

  <h2>Add your Blogs </h2>
  <div class="container">
    <form name="blog" action="" method="post" onsubmit="return form();" enctype="multipart/form-data">
      <div class="row">
        <div class="col-25">
          <span class="error" id="Title_error"></span><br><br>
          <label for="fname">Title</label>
        </div>
        <div class="col-75">

          <input type="text" id="title" name="Title" placeholder="Your Title....">
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="Categories">Categories</label>
        </div>
        <div class="col-75">
          <select id="Categories" name="Categories" required>
            <option value=" ">Categories</option>
            <option value="Sports">Sports</option>
            <option value="Travel">Travel</option>
            <option value="Games">Games</option>
            <option value="Temple">Temple</option>
            <option value="Army">Army</option>
          </select>
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <span class="error" id="Blog_error"></span><br><br>
          <label for="subject">brief Blog</label>
        </div>
        <div class="col-75">
          <textarea id="blog" name="Blog" placeholder="Your Story...." style="height:100px" maxlength="200"></textarea>
        </div>
        <div class="col-25">
          <span class="error" id="fBlog_error"></span><br><br>
          <label for="subject">Full Blog</label>
        </div>
        <div class="col-75">
          <textarea id="Fblog" name="fBlog" placeholder="Write Your Story...." style="height:200px" maxlength="10000"></textarea>
        </div>
      </div>
      <input type="hidden" name="uidblog" value="<?php echo $_SESSION['newid']; ?>" />
      <div class="col-50">
        Select image to upload:
        <center>
          <input type="file" name="images" id="fileToUpload" required>
        </center>
        <br>
      </div>
      <div class="row">
        <p> <input type="submit" value="submit" name="submit"></p>
      </div>
    </form>
  </div>

  <?php

  include 'cons.php';

  if (isset($_POST['submit'])) {

    $title = $_REQUEST['Title'];
    $categories = $_REQUEST['Categories'];
    $blog = $_REQUEST['Blog'];
    $fblog = $_REQUEST['fBlog'];

    $file = $_FILES['images'];
    $uid = $_REQUEST['uidblog'];
    //print_r($_REQUEST['fBlog']);
    $filename = $file['name'];
    $status = 'Draft';
    $filepath = $file['tmp_name'];
    $filerror = $file['error'];
    if ($filerror == 0) {
      $destfile = 'images/' . $filename;
      //echo "$destfile";
      move_uploaded_file($filepath, $destfile);
      $insertquery = "insert into addblog(Title,Categories,Blog,fullblog,image,status, uidblog) values(' $title', '$categories', ' $blog',' $fblog','$destfile',' $status','$uid')";

      if (mysqli_query($conn, $insertquery)) {

  ?>
        <script>
          alert('Details in a database successfully.');
        </script>

  <?php



      } else {
        echo "ERROR" . mysqli_error($conn);
      }
    }
  }
  
  ?>

</body>

</html>