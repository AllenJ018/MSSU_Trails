<?


if(isset($_POST['submit']))
{

session_start();
$_SESSION['name'] = $_POST['name'];

echo $_SESSION['name'];
unset($_SESSION['name']);
session_destroy();
}
?>

<!DOCTYPE html>

<html>
    <body>
        <form action = "<? echo $_SERVER['PHP_SELF'] ?>" method = "POST">
        <input type ='text' name="name">
        <input type = "submit" name ="submit" value = "submit">
        </form>
        </body>
        </html>