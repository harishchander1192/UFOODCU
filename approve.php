<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hari blogs</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<style>
    .xyz {
        position: absolute;
        left: 42%;
        top: 50%;
        transform: translate(10px, 10px);
        background-color: white;
        padding: 50px;
        animation-name: example;
        animation-duration: 15s;
    }

    @keyframes example {
        from {
            background-color: red;
        }

        to {
            background-color: yellow;
        }
    }
</style>

<body>
    <div class="w3-top">
        <div class="w3-bar w3-white w3-wide w3-padding w3-card">
            <a href="#home" class="w3-bar-item w3-button"><b>HARI</b> Blogs</a>
        </div>
    </div>
    <br>
    <div class="xyz">
        <form name="story" action=" " method="post">
            <input type="radio" id="Approved" name="status" value="Approved" required="required">
              <label for="Approved">Approved</label>
              <input type="radio" id="Draft" name="status" value="Draft" required="required">
              <label for="Draft">Draft</label><br>
            <input type="submit" value="submit" name="submit">
        </form>

    </div>
    <?php
    session_start();
    include 'cons.php';
    $id = $_REQUEST['pid'];

    if (isset($_POST['submit'])) {

        print_r($_POST['status']);
        $status = $_REQUEST['status'];
        echo $statusquery = "UPDATE addblog SET status = '$status' WHERE id = $id ";

        if (mysqli_query($conn, $statusquery)) {
    ?>
            <script>
                alert('Admin Approved/Draft that this blog is published soon...!!');
            </script>

        <?php
        } else {
            echo "ERROR" . mysqli_error($conn);
        }
    }
    $selectquery = "select * from addblog  where id='$id'  ";

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
            <p><?php echo " " . $Blog  . $FBlog; ?></p>
            <div class="w3-container w3-white">
            <div>
            <h4>
      <span class="w3-tag w3-black w3-margin-bottom">Pending comments</span>
    </h4>
      <?php
    $query = "select * from comments where uids='$id' and cmtStatus='Reject' ";
      $result1 = mysqli_query($conn, $query);
      if ($row1 = mysqli_fetch_assoc($result1)) {
        $first_name = $row1['firstN'];
        $last_name = $row1['lastN'];
        $comment = $row1['comment'];
       

        do {
          if (isset($row1['comment'])) {
            echo  "<h5><b> " . $row1['firstN'] . " " . $row1['lastN'] . "</b></h5>" . $row1['comment'];?> 
           <button><a href="http://localhost/blogs/approvalcmt.php?cid=<?php echo($row1['id']);  $cid=$row1['id'];?>">click </a></button><?php
            echo  "<br> <br><br><br><br><br>";
          } else echo 'No one comment yet..!';
        } while ($row1 = mysqli_fetch_array($result1));
      }
      ?>
    </div>
            </div>

        <?php
    } else {
        echo "No blog data found";
    }
        ?>
</body>

</html>