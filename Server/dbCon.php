<!DOCTYPE html>
<html>
<body>

<?php
echo "test";
$conn = mysqli("localhost", "root", "tomatojammer2010", "world");

if(!$conn){
    echo "Error" . mysqli_connect_error();
}

echo "Succ";
?>

</body>
</html>