   <?php
    session_start();
    ?>
   <form name="blog" action="" method="post">
       <div class="col-75">
           <textarea id="comment" name="Comment" placeholder="Your Comment...." style="height:100px" maxlength="200"></textarea>
       </div>
       <input type="hidden" id="uids" name="user" value="<?php echo $_SESSION['newid'];
                                                            $user = $_SESSION['newid'];
                                                            ?>">
       <input type="submit" value="submit" name="submit">

   </form>
   <?php
    include 'cons.php';

    if (isset($_POST['submit'])) {
        $comment = $_REQUEST['Comment'];
        $query = "insert into comments(comment) values('$comment')";

        if (mysqli_query($conn, $query)) {

    ?>
           <script>
               alert('Comment post successfully.');
           </script>

           <?php
        } else {
            echo "ERROR" . mysqli_error($conn);
        }
        $user1 = "select * from singupacc where id='$user' ";
        $out = mysqli_query($conn, $user1);
        if ($ro = mysqli_fetch_assoc($out)) {
            $first_name = $ro['fname'];
            $last_name = $ro['lname'];

            echo $first_name;

            $adduname = "insert into comments(firstN,lastN) values('$first_name',' $last_name')";
            if (mysqli_query($conn, $adduname)) {

            ?>
               <script>
                   // alert('Details in a database successfully.');			
               </script>

   <?php
            } else {
                echo "ERROR" . mysqli_error($conn);
            }
        }
    }


    ?>