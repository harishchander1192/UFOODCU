<?php
 
session_start();

require ('cons.php');
    $return = '';
    $query_run = mysqli_query($conn, "select * from addblog where status = 'Approved'");
                                    
    while($rows = mysqli_fetch_array( $query_run))
    {
        $return .= '
              
        <div class="w3-card w3-margin">
    <ul class="w3-ul w3-hoverable w3-white">

      <li class="w3-padding-16">
      <img src="/blogs/'.($rows['image']).'"	 class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">'.$rows["Title"].'</span><br>
        <span>'.$rows["Categories"].'</span>
      </li>

    </ul>
    </div>';
 
  } 
  echo $return;
