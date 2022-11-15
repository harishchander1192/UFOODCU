<?php
include('cons.php');
session_start();
$gid = $_SESSION['newid'];;
$return = '';
$run =  "select * from singupacc where id='$gid'  ";
$runquery = mysqli_query($conn, $run);

if ($ro = mysqli_fetch_assoc($runquery)) {
    $role = $ro['rol'];

    if ($role == 'Author') {
        if (isset($_POST["query"])) {
            $search = mysqli_real_escape_string($conn, $_POST["query"]);
            $query = "SELECT * FROM addblog
                        WHERE   uidblog=$gid and Title LIKE '%" . $search . "%'";
        } else {
            $query = "SELECT * FROM addblog where  uidblog = $gid ";
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
                                        <th> IMAGE </th>
                                        <th>Title</th>
                                        <th>Categories</th>
                                        <th>Blog</th>
                                        <th>Delete</th>                                     
                                     </tr>                                    
                            </thead>';
            $gid = $_SESSION['newid'];;
            $query_run = mysqli_query($conn, "select * from addblog where uidblog=$gid ");
            while ($row = mysqli_fetch_array($result)) {
                $return .= '                                   
                                   <tr>                               
                                   <td>  <center><img src="/blogs/' . ($row['image']) . '"	alt="Image" style="width: 100px; hight: 100px;">  </center>  </td>
                                   <td>' . $row["Title"] . '</td>
                                   <td>' . $row["Categories"] . '</td>
                                   <td>' . $row["blog"] . '</td>                   
                                   <td> <a href = "delete.php?pid=' . rawurlencode($row['id']) . '" ><center> ⌫ </center></td>        
                                                         
                             </tr>';
?>                    
                                   <?php
                                }
                                echo $return;
                            }
                        } elseif ($role == 'Admin') {
                            if (isset($_POST["query"])) {
                                $search = mysqli_real_escape_string($conn, $_POST["query"]);
                                $query = "SELECT * FROM addblog
                          WHERE  and Title LIKE '%" . $search . "%'";
                            } else {
                                $query = "SELECT * FROM addblog ";
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
                <th> IMAGE </th>
                <th>Title</th>
                <th>Categories</th>
                <th>Blog</th>
                <th>Delete</th>
                <th>View</th>             
             </tr>            
    </thead>';
                                $gid = $_SESSION['newid'];;

                                $query_run = mysqli_query($conn, "select * from addblog where uidblog=$gid ");

                                while ($row = mysqli_fetch_array($result)) {
                                    $return .= '    
           <tr>
           <td>  <center><img src="/blogs/' . ($row['image']) . '"	alt="Image" style="width: 100px; hight: 100px;">  </center>  </td>
           <td>' . $row["Title"] . '</td>
           <td>' . $row["Categories"] . '</td>
           <td>' . $row["blog"] . '</td>
  
           <td> <a href = "delete.php?pid=' . rawurlencode($row['id']) . '" ><center> ⌫ </center></td>
         
               <td>             
               <a href = "approve.php?pid=' . rawurlencode($row['id']) . '" ><center> ▶ </center>
                </td>        
           </tr>';
                                }
                                echo $return;
                            }
                        }
                    } else {
                        echo '<p style="margin-top:2rem; color:red; font-size:170%; text-align:center;"<br>No results containing all your search terms were found...!';
                    }

                                    ?>
