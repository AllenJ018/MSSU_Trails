<?php
//Part 1, creates alert function to connect to javascript, then creates msg string to make a table of data from 5 to 15 then outputs it.
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
$msgString = "";
for($x = 5; $x <= 15; $x++)
	$msgString .= ("$x: Squared: " . $x ** 2 . "  Cubed: " . $x ** 3 . "\\n");
alert($msgString);




//Part 2 create document.write function to use javascript, create function to do fibonacci sequence recursively

function documentWrite($string){
	echo "<script type='text/javascript'>document.write('$string');</script>";
}


function fibSeq($int, $a = 0, $b = 1)
{
	if($int > 0)
	{
		documentWrite($a . " ");
		fibSeq($int - 1, $b, $a+$b);
	}
}

echo("<p>part 2: First 20 numbers of Fib Seq");
fibSeq(20);
echo("</p>");


//Part 3, create form to ask for input for numbers to show of fib seq, then check if the form is filled. If it is, shows them.
echo("part 3: ask for numbers to show of Fib Seq:");
echo "<html>
	  <body>
	  <form method='get'>
	  Fib Numbers to show: <input type='text' name='fibNum'><br>
	  <input type='submit'>
	  </form>
	  </body>
	  </html>";
	  
if(isset($_GET['fibNum'])){
	$fib = (int)$_GET['fibNum'];
	@fibSeq($fib);
}

?>