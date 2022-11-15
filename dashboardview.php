<!DOCTYPE html>
<html>

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

<script>
  $(document).ready(function() {
    load_data();

    function load_data(query) {
      $.ajax({
        url: "allblog.php",
        method: "POST",
        data: {
          query: query
        },
        success: function(data) {
          $('#result').html(data);
        }
      });
    }

  });
</script>
<?php
session_start();
?>


<style>
  body,
  h1,
  h2,
  h3,
  h4,
  h5 {
    font-family: "Raleway", sans-serif
  }

  .label:after {
    content: '';
  }

  .label:hover:after {
    content: ' Logout';
  }
</style>
<body>
  <!-- Navbar (sit on top) -->
  <div class="w3-top">
    <div class="w3-bar w3-white w3-wide w3-padding w3-card">
      <a href="http://localhost/blogs/dashboardview.php" class="w3-bar-item w3-button"><b>HARI</b> Blogs</a>
      <!-- Float links to the right. Hide them on small screens -->
      <div class="w3-right w3-hide-small">
        <div class="w3-bar-item w3-button">
          <a href="http://localhost/blogs/logout1.php?id=<?php echo md5($_SESSION['Id']); ?>" class="label">
            <?php
            if ($_SESSION['firstName']) {
              echo "" . $_SESSION['firstName'];
              echo "<br>";
            } else {
              header("Location:http://localhost/blogs/loginauthor.php");
            }
            ?>
          </a>
        </div>
      </div>
    </div>
  </div>
  </div>
  <br>
  <div class="w3-content" style="max-width:1400px">
    <!-- Header -->
    <header class="w3-container w3-center w3-padding-32">
      <h1><b>BLOG</b></h1>
      <!-- <p>Welcome to the blog of <span class="w3-tag">unknown</span></p> -->
    </header>
    <form action=" " id="main" name="main" method="GET">
      <select class="form-control" name="categorie" required>
        <option value="" selected="selected">Categories</option>
        <option value="All">All</option>
        <option value="Sports">Sports</option>
        <option value="Travel">Travel</option>
        <option value="Games">Games</option>
        <option value="Temple">Temple</option>
        <option value="Army">Army</option>
      </select>
      <input type="submit" value="submit" name="submit">
    </form>
    <?php
    include 'cons.php';
    if (isset($_GET["categorie"])) {
      $newcat = $_GET["categorie"];
      if ($newcat == 'All') {
        $selectquery = " ";
        $result = mysqli_query($conn, "select * from addblog  where status = 'Approved' ");
        if ($row = mysqli_fetch_assoc($result)) {
          $_SESSION['Id'] = $row['id'];
          $_SESSION['title'] = $row['Title'];
          $_SESSION['categories'] = $row['Categories'];
          $_SESSION['Filename'] = $row['image'];
          $_SESSION['Blog'] = $row['blog'];
          $_SESSION['FBlog'] = $row['fullblog'];
          $_SESSION['Time'] = $row['time'];
        } else {
          echo "please fill your details first";
        }
    ?>
        <!-- Grid -->
        <div class="w3-row">
          <!-- Blog entries -->
          <div class="w3-col l8 s12">
            <!-- Blog entry -->
            <?php
            mysqli_close($conn);
            do {
            ?>
              <div class="w3-card-4 w3-margin w3-white">
                <img src="<?php echo ($row['image']); ?>" style="width:100%;min-height:200px; " class="w3-round"><br><br>
                <div class="w3-container">
                  <h3><b><?php if (isset($row['Title'])) {
                            echo  "<h1>" . $row['Title'];
                          } else echo '<img src="images\nodata.png" style="width:100% hight=100%">';

                          echo "<br></h1>"; ?></b></h3>
                  <h5> <span class="w3-opacity"></span></h5>
                </div>
                <div class="w3-container">
                  <p><?php echo " " . $row['blog'];
                      echo "<br>"; ?></p>
                  <div class="w3-row">
                    <div class="w3-col m8 s12">
                      <p><button class="w3-button w3-padding-large w3-white w3-border"><b><a href="fullblog.php?pid=<?php echo rawurlencode($row['id']); ?> ">READ MORE »</a></b></button></p>
                    </div>
                    <div class="w3-col m4 w3-hide-small">
                    </div>
                  </div>
                </div>
              </div>
              <hr>
            <?php
            } while ($row = mysqli_fetch_array($result))
            ?>
            <!-- END BLOG ENTRIES -->
          </div>
        <?php
      }
      if ($newcat == 'Sports') {
        $selectquery = " ";
        $result = mysqli_query($conn, "select * from addblog where Categories='Sports' and status = 'Approved'  ");
        if ($row = mysqli_fetch_assoc($result)) {
          $_SESSION['Id'] = $row['id'];
          $_SESSION['title'] = $row['Title'];
          $_SESSION['categories'] = $row['Categories'];
          $_SESSION['Filename'] = $row['image'];
          $_SESSION['Blog'] = $row['blog'];
          $_SESSION['FBlog'] = $row['fullblog'];
          $_SESSION['Time'] = $row['time'];
        } else {
          echo "please fill your details first";
        }
        ?>
          <!-- Grid -->
          <div class="w3-row">
            <!-- Blog entries -->
            <div class="w3-col l8 s12">
              <!-- Blog entry -->
              <?php
            mysqli_close($conn);
              do {
              ?>
                <div class="w3-card-4 w3-margin w3-white">
                  <img src="<?php echo ($row['image']); ?>" style="width:100%;min-height:200px; " class="w3-round"><br><br>
                  <div class="w3-container">
                    <h3><b><?php if (isset($row['Title'])) {
                              echo  "<h1>" . $row['Title'];
                            } else echo '<img src="images\nodata.png" style="width:100% hight=100%">';

                            echo "<br></h1>"; ?></b></h3>
                    <h5> <span class="w3-opacity"></span></h5>
                  </div>
                  <div class="w3-container">
                    <p><?php echo " " . $row['blog'];
                        echo "<br>"; ?></p>
                    <div class="w3-row">
                      <div class="w3-col m8 s12">
                        <p><button class="w3-button w3-padding-large w3-white w3-border"><b><a href="fullblog.php?pid=<?php echo rawurlencode($row['id']); ?> ">READ MORE »</a></b></button></p>
                      </div>
                      <div class="w3-col m4 w3-hide-small">
                      </div>
                    </div>
                  </div>
                </div>
                <hr>
              <?php
              } while ($row = mysqli_fetch_array($result))
              ?>
              <!-- END BLOG ENTRIES -->
            </div>
          <?php
            }
        if ($newcat == 'Travel') {
          $selectquery = " ";
          $result = mysqli_query($conn, "select * from addblog where Categories='Travel' and status = 'Approved' ");
          if ($row = mysqli_fetch_assoc($result)) {
            $_SESSION['Id'] = $row['id'];
            $_SESSION['title'] = $row['Title'];
            $_SESSION['categories'] = $row['Categories'];
            $_SESSION['Filename'] = $row['image'];
            $_SESSION['Blog'] = $row['blog'];
            $_SESSION['FBlog'] = $row['fullblog'];
            $_SESSION['Time'] = $row['time'];
          } else {
            echo "please fill your details first";
          }
          ?>
            <!-- Grid -->
            <div class="w3-row">
              <!-- Blog entries -->
              <div class="w3-col l8 s12">
                <!-- Blog entry -->
                <?php
                mysqli_close($conn);
                do {
                ?>
                  <div class="w3-card-4 w3-margin w3-white">
                    <img src="<?php echo ($row['image']); ?>" style="width:100%;min-height:200px; " class="w3-round"><br><br>
                    <div class="w3-container">
                      <h3><b><?php if (isset($row['Title'])) {
                                echo  "<h1>" . $row['Title'];
                              } else echo '<img src="images\nodata.png" style="width:100% hight=100%">';
                              echo "<br></h1>"; ?></b></h3>
                      <h5> <span class="w3-opacity"></span></h5>
                    </div>

                    <div class="w3-container">
                      <p><?php echo " " . $row['blog'];
                          echo "<br>"; ?></p>
                      <div class="w3-row">
                        <div class="w3-col m8 s12">
                          <p><button class="w3-button w3-padding-large w3-white w3-border"><b><a href="fullblog.php?pid=<?php echo rawurlencode($row['id']); ?> ">READ MORE »</a></b></button></p>
                        </div>
                        <div class="w3-col m4 w3-hide-small">
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr>
                <?php
                } while ($row = mysqli_fetch_array($result))
                ?>
                <!-- END BLOG ENTRIES -->
              </div>
            <?php
          }

          if ($newcat == 'Games') {
            $selectquery = " ";
            $result = mysqli_query($conn, "select * from addblog where Categories='Games' and status = 'Approved' ");
            if ($row = mysqli_fetch_assoc($result)) {
              $_SESSION['Id'] = $row['id'];
              $_SESSION['title'] = $row['Title'];
              $_SESSION['categories'] = $row['Categories'];
              $_SESSION['Filename'] = $row['image'];
              $_SESSION['Blog'] = $row['blog'];
              $_SESSION['FBlog'] = $row['fullblog'];
              $_SESSION['Time'] = $row['time'];
            } else {
              echo "please fill your details first";
            }
            ?>
              <!-- Grid -->
              <div class="w3-row">
                <!-- Blog entries -->
                <div class="w3-col l8 s12">
                  <!-- Blog entry -->
                  <?php
                  mysqli_close($conn);
                  do {
                  ?>
                    <div class="w3-card-4 w3-margin w3-white">
                      <img src="<?php echo ($row['image']); ?>" style="width:100%;min-height:200px; " class="w3-round"><br><br>
                      <div class="w3-container">
                        <h3><b><?php if (isset($row['Title'])) {
                                  echo  "<h1>" . $row['Title'];
                                } else echo '<img src="images\nodata.png" style="width:100% hight=100%">';
                                echo "<br></h1>"; ?></b></h3>
                        <h5> <span class="w3-opacity"></span></h5>
                      </div>
                      <div class="w3-container">
                        <p><?php echo " " . $row['blog'];
                            echo "<br>"; ?></p>
                        <div class="w3-row">
                          <div class="w3-col m8 s12">
                            <p><button class="w3-button w3-padding-large w3-white w3-border"><b><a href="fullblog.php?pid=<?php echo rawurlencode($row['id']); ?> ">READ MORE »</a></b></button></p>
                          </div>
                          <div class="w3-col m4 w3-hide-small">
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr>
                  <?php
                  } while ($row = mysqli_fetch_array($result))
                  ?>
                  <!-- END BLOG ENTRIES -->
                </div>
              <?php
            }
            if ($newcat == 'Temple') {
              $selectquery = " ";
              $result = mysqli_query($conn, "select * from addblog where Categories='Temple' and status = 'Approved' ");
              if ($row = mysqli_fetch_assoc($result)) {
                $_SESSION['Id'] = $row['id'];
                $_SESSION['title'] = $row['Title'];
                $_SESSION['categories'] = $row['Categories'];
                $_SESSION['Filename'] = $row['image'];
                $_SESSION['Blog'] = $row['blog'];
                $_SESSION['FBlog'] = $row['fullblog'];
                $_SESSION['Time'] = $row['time'];
              } else {
                echo "please fill your details first";
              }
              ?>
                <!-- Grid -->
                <div class="w3-row">
                  <!-- Blog entries -->
                  <div class="w3-col l8 s12">
                    <!-- Blog entry -->
                    <?php
                    mysqli_close($conn);
                    do {
                    ?>
                      <div class="w3-card-4 w3-margin w3-white">
                        <img src="<?php echo ($row['image']); ?>" style="width:100%;min-height:200px; " class="w3-round"><br><br>
                        <div class="w3-container">
                          <h3><b><?php if (isset($row['Title'])) {
                                    echo  "<h1>" . $row['Title'];
                                  } else echo '<img src="images\nodata.png" style="width:100% hight=100%">';
                                  echo "<br></h1>"; ?></b></h3>
                          <h5> <span class="w3-opacity"></span></h5>
                        </div>
                        <div class="w3-container">
                          <p><?php echo " " . $row['blog'];
                              echo "<br>"; ?></p>
                          <div class="w3-row">
                            <div class="w3-col m8 s12">
                              <p><button class="w3-button w3-padding-large w3-white w3-border"><b><a href="fullblog.php?pid=<?php echo rawurlencode($row['id']); ?> ">READ MORE »</a></b></button></p>
                            </div>
                            <div class="w3-col m4 w3-hide-small">
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr>
                    <?php
                    } while ($row = mysqli_fetch_array($result))
                    ?>
                    <!-- END BLOG ENTRIES -->
                  </div>
                <?php
              }
              if ($newcat == 'Army') {
                $selectquery = " ";
                $result = mysqli_query($conn, "select * from addblog where Categories='Army' and status = 'Approved' ");
                if ($row = mysqli_fetch_assoc($result)) {
                  $_SESSION['Id'] = $row['id'];
                  $_SESSION['title'] = $row['Title'];
                  $_SESSION['categories'] = $row['Categories'];
                  $_SESSION['Filename'] = $row['image'];
                  $_SESSION['Blog'] = $row['blog'];
                  $_SESSION['FBlog'] = $row['fullblog'];
                  $_SESSION['Time'] = $row['time'];
                } else {
                  echo "please fill your details first";
                }
                ?>
                  <!-- Grid -->
                  <div class="w3-row">
                    <!-- Blog entries -->
                    <div class="w3-col l8 s12">
                      <!-- Blog entry -->
                      <?php
                      mysqli_close($conn);
                      do {
                      ?>
                        <div class="w3-card-4 w3-margin w3-white">
                          <img src="<?php echo ($row['image']); ?>" style="width:100%;min-height:200px; " class="w3-round"><br><br>
                          <div class="w3-container">
                            <h3><b><?php if (isset($row['Title'])) {
                                      echo  "<h1>" . $row['Title'];
                                    } else echo '<img src="images\nodata.png" style="width:100% hight=100%">';

                                    echo "<br></h1>"; ?></b></h3>
                            <h5> <span class="w3-opacity"></span></h5>
                          </div>
                          <div class="w3-container">
                            <p><?php echo " " . $row['blog'];
                                echo "<br>"; ?></p>
                            <div class="w3-row">
                              <div class="w3-col m8 s12">
                                <p><button class="w3-button w3-padding-large w3-white w3-border"><b><a href="fullblog.php?pid=<?php echo rawurlencode($row['id']); ?> ">READ MORE »</a></b></button></p>
                              </div>
                              <div class="w3-col m4 w3-hide-small">
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr>
                      <?php
                      } while ($row = mysqli_fetch_array($result))
                      ?>
                      <!-- END BLOG ENTRIES -->
                    </div>
                 <?php
                }
              } else {
                $selectquery = " ";
                $result = mysqli_query($conn, "select * from addblog where status = 'Approved' ");
                if ($row = mysqli_fetch_assoc($result)) {
                  $_SESSION['Id'] = $row['id'];
                  $_SESSION['title'] = $row['Title'];
                  $_SESSION['categories'] = $row['Categories'];
                  $_SESSION['Filename'] = $row['image'];
                  $_SESSION['Blog'] = $row['blog'];
                  $_SESSION['FBlog'] = $row['fullblog'];
                  $_SESSION['Time'] = $row['time'];
                } else {
                  echo "please fill your details first";
                }
                  ?>
                  <!-- Grid -->
                  <div class="w3-row">
                    <!-- Blog entries -->
                    <div class="w3-col l8 s12">
                      <!-- Blog entry -->
                      <?php
                      mysqli_close($conn);
                      do {
                      ?>
                        <div class="w3-card-4 w3-margin w3-white">
                          <img src="<?php echo ($row['image']); ?>" style="width:100%;min-height:200px; " class="w3-round"><br><br>
                          <div class="w3-container">
                            <h3><b><?php if (isset($row['Title'])) {
                                      echo  "<h1>" . $row['Title'];
                                    } else echo '<img src="images\nodata.png" style="width:100% hight=100%">';

                                    echo "<br></h1>"; ?></b></h3>
                            <h5> <span class="w3-opacity"></span></h5>
                          </div>
                          <div class="w3-container">
                            <p><?php echo " " . $row['blog'];
                                echo "<br>"; ?></p>
                            <div class="w3-row">
                              <div class="w3-col m8 s12">
                                <p><button class="w3-button w3-padding-large w3-white w3-border"><b><a href="fullblog.php?pid=<?php echo rawurlencode($row['id']); ?> ">READ MORE »</a></b></button></p>
                              </div>
                              <div class="w3-col m4 w3-hide-small">
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr>
                      <?php
                      } while ($row = mysqli_fetch_array($result))
                      ?>
                      <!-- END BLOG ENTRIES -->
                    </div>
                  <?php
                }
                  ?>
                  <!-- Introduction menu -->
                  <div class="w3-col l4">
                    <!-- About Card -->
                    <div class="w3-card w3-margin w3-margin-top">
                    </div>
                    <hr>
                    <hr>
                    <!-- Labels / tags -->
                    <div class="w3-card w3-margin">
                      <div class="w3-container w3-padding">
                        <h4>Categories</h4>
                      </div>
                      <div class="w3-container w3-white">
                      <p>
                          <span class="w3-tag w3-black w3-margin-bottom" name="ca" value="all"><a href="#">All</a></span>
                          <span class="w3-tag w3-black w3-margin-bottom" name="ca" value="Travel"><a href="#">Travel</a></span>
                          <span class="w3-tag w3-black w3-margin-bottom" name="ca" value="Temple"><a href="#">Temple<a></span>
                          <span class="w3-tag w3-black w3-margin-bottom"><a href="#">Army</a></span>
                          <span class="w3-tag w3-black w3-margin-bottom"><a href="#">Sports</a></span>
                          <span class="w3-tag w3-black w3-margin-bottom"><a href="#">Games</a></span>
                        </p>
                        <div class="w3-card w3-margin">
                          <ul class="w3-ul w3-hoverable w3-white">
                            <li class="w3-padding-16">
                              <div id="result"></div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- END Introduction Menu -->
                  </div>
                  <!-- END GRID -->
                  </div><br>
                  <!-- END w3-content -->
                  </div>
                  <!-- Footer -->
                  <footer class="w3-center w3-black w3-padding-16">
                    <p>Powered by <a href="#" title="hari" target="_blank" class="w3-hover-text-green">HARI Pvt. Ltd.</a></p>
                  </footer>