<!DOCTYPE HTML>
<html>
<body>

<form action = "" method="post">
Name: <input type = "text" name="name"><br>
Email: <input type = "text" name="email"><br>
<input type ="submit">
</form>
</body>
</html>
<?php
/*
$target = 1;
while($target < 9){
switch($target){
	case 1:
		print"Sunday";
		break;
	case 2:
		print"Monday";
		break;
	case 3:
		print"Tuesday";
		break;
	case 4:
		print"Wednesday";
		break;
	case 5:
		print"Thursday";
		break;
	case 6:
		print"Friday";
		break;
	case 7:
		print"Saturday";
		break;
	default:
		print "Tomato";
}
$target++;
}

function getSum($a, $b){
	return $a + $b;
	}
	
	$c = getSum(5, 5);
	echo ($c);
	
	$_SERVER Datqa about server running
	$_ENV clients envi
	$_GET data sent to the server bya  get  request
	$_POST data sent by a post request
	
	
	preg_oneofthese('/pattern/', variable)
	preg_match() regex - true or false if found
	preg_split() regex - split results into a numeric summary
	preg_replace(
    string|array $pattern,
    string|array $replacement,
    string|array $subject,
    int $limit = -1,
    int &$count = null
): string|array|null

	$test = "testfilefoldercheesetomatoorangeapple";
	$folder = "test";
	if(preg_match("/$folder/", $test))
		echo "found $folder";
	else
		echo "did not find $folder";
	
	$date = "copyright 4 1999 1943";	
	$date = preg_replace("/[0-9]{4}/", "2000", $date);	
	echo ($date);
	
	for($i = 0; $i<50; $i++)
		echo ($_ENV[$i]);
	
	*/
	echo ("Name was " . $_POST['name'] . "<br>");
	echo ("Email was " . $_POST["email"]);
	
?>