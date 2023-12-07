<?php
session_start();

 if(isset($_POST['insertComment']))
 {
    $host = "127.0.0.1";
    $dbusername = "cheeseLorder";
    $dbpwrd = "cheesehost";

    $con = mysqli_connect($host, $dbusername, $dbpwrd, "mssu_trails");
    if (!$con)
    {   
    die('Could not connect: ' . mysql_error()); 
    }

    $trail = (int)$_SESSION['trailid'];
    $user = (int)$_SESSION['uid'];
    $comment = $_POST['txtcomment'];

    $sql_comments = "INSERT into user_data (trail_comment, uid, tid )
    VALUES ('$comment', $user, $trail);";
    if($comment != ""){
      $comments = mysqli_query($con, $sql_comments);
    }
    else{
      alert("Error: comment cannot be blank");
        }

    $trail_link_sql = mysqli_query($con, "SELECT trail_info FROM mssu_trails.trails
  WHERE mssu_trails.trails.trail_id ='$trail';");
  $row = mysqli_fetch_assoc($trail_link_sql);
  $trail_link = $row['trail_info'];
  echo $trail_link;
    echo 
    "<script> location.href='$trail_link'; 
    </script>";
}


function alert($msg) 
{
  echo "<script>alert('$msg')</script>"; 
}
?>