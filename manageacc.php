
<?php
include('cons.php');
session_start();
$gid = $_SESSION['newid'];;
$return = '';
$run =  "select * from singupacc where id='$gid'  ";
$runquery = mysqli_query($conn, $run);

if ($ro = mysqli_fetch_assoc($runquery)) {
    $role = $ro['rol'];

    if ($role == 'Admin') {
        if (isset($_POST["query"])) {
            $search = mysqli_real_escape_string($conn, $_POST["query"]);
            $query = "SELECT * FROM singupacc
                        WHERE fname LIKE '%" . $search . "%'  and accStatus='Reject'";
        } else {
            $query = "SELECT * FROM singupacc  where accStatus='Reject' ";
        }
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            $return .= '
                            <div class="container" style="margin-top:2rem;">
                            <center>
                            <form action="" method="POST" enctype="multipart/form-data">
                            <table  class="table table-striped" >                          
                            <thead> 
                                     <tr>
                                        <th> First Name </th>
                                        <th>Last Name</th>
                                        <th>E-Mail ID</th>
                                        <th>Delete</th> 
                                        <th>Status</th>
                                                                    
                                     </tr>                                    
                            </thead>';
            $gid = $_SESSION['newid'];;
            $query_run = mysqli_query($conn, "select * from singupacc where accStatus='Reject'");
            while ($row = mysqli_fetch_array($result)) {
                $return .= '                                   
                                   <tr>                               
                                  
                                   <td>' . $row["fname"] . '</td>
                                   <td>' . $row["lname"] . '</td>
                                   <td>' . $row["email"] . '</td>                   
                                   <td> <a href = "deleteaccount.php?pid=' .rawurlencode($row['id']) . '" ><center> ⌫ </center></td>      
                                   <td> <a href = "approveaccount.php?pid=' .rawurlencode($row['id']) . '" ><center> ▶ </center></td>                                                          
                             </tr>';
?>                    
                                   <?php
                                }
                                echo $return;
                            }
                        } 
                    } else {
                        echo '<p style="margin-top:2rem; color:red; font-size:170%; text-align:center;"<br>No results containing all your search terms were found...!';
                    }

                                    ?>
