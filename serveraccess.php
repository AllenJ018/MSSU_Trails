<?php
session_start();
function alert($msg) 
{
  echo "<script>alert('$msg')</script>"; 
}

$host = "127.0.0.1";
$dbusername = "cheeseLorder";
$dbpwrd = "cheesehost";

$con = mysqli_connect($host, $dbusername, $dbpwrd, "mssu_trails");
if (!$con)
  {
  die('Could not connect: ' . mysql_error()); 
  }

$uname = $_POST["username"];
$pword = $_POST["password"];


if ($_SERVER['REQUEST_METHOD'] === 'POST'){

if (isset($_POST['submitbtn']))
{
  $count_name = mysqli_query($con, "SELECT count(*) FROM mssu_trails.users 
  WHERE mssu_trails.users.user_name ='$uname';");
  $count_pword = mysqli_query($con, "SELECT count(*) FROM mssu_trails.users 
  WHERE  mssu_trails.users.user_password = '$pword';");
$row_name = $count_name->fetch_row();
$row_pword = $count_pword->fetch_row();

  if((int)$row_name[0] == 1 && (int)$row_pword[0] == 1)
  {
    $user = mysqli_query($con, "SELECT user_id FROM mssu_trails.users
    WHERE mssu_trails.users.user_name = '$uname' AND
    mssu_trails.users.user_password = '$pword';");
  $user_id = $user->fetch_row();
    $_SESSION['uid'] = (int)$user_id[0];


    echo "<script> location.href='TrailMap.html'; </script>";
    exit;
  }
  elseif ((int)$row_name[0] == 0){
    alert("Error: username: $uname not found in database");
    echo "<script> location.href='LogIn.html'; </script>";
    exit;
  }
  elseif ((int)$row_pword[0] == 0){
    alert("Error: incorrect password");
    echo "<script> location.href='LogIn.html'; </script>";
    exit;
  }
}

elseif(isset($_POST["registerbtn"]))
{
  $sql = "INSERT INTO mssu_trails.users (user_name, user_password)
  VALUES ('$uname', '$pword')";

$result = mysqli_query($con, $sql);
if ($result) {
  echo "<script> location.href='TrailMap.html'; </script>";
        exit;
} else {
  echo "Error: " . mysqli_error($cnn);
}

}
}
?>