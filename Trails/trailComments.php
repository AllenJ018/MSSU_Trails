<?php

$host = "127.0.0.1";
$dbusername = "cheeseLorder";
$dbpwrd = "cheesehost";

$con = mysqli_connect($host, $dbusername, $dbpwrd, "mssu_trails");
if (!$con)
  {
  die('Could not connect: ' . mysql_error()); 
  }
$trail = $_SESSION['trailid'];
$sql_comments = "SELECT user_name, trail_comment FROM user_data INNER JOIN users
ON user_data.uid = users.user_id 
WHERE tid = '$trail';";
$comments = mysqli_query($con, $sql_comments);

while($row = mysqli_fetch_assoc($comments))
    {
        echo $row['user_name'].': ';
        echo $row['trail_comment'];
        echo '<br>';
    }
echo '<br>';


function alert($msg) 
{
  echo "<script>alert('$msg')</script>"; 
}
?>