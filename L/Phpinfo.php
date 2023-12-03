<?php 
phpinfo(); 

echo "<html>
	  <body>
	  <form method='post'>
	  InputData: <input type='text' name='data'><br><br>
	  <input type='submit' name='submit' value='Submit'>
	  </form>";
	 /*<form method="post" action"<?php echo htmlspecialchars($_SERVER["PHP_SELF");?>">
	$_POST collect variables pased to it, $_SERVER["PHP_SELF"]  is a variable that returns the current script being executed
	php html
	& &amp;
	" &quot;
	' &#039;
	< &lt;
	> &gt;
	/ &#47;
	\ &#92;
	; &semi; or &#59;
	
	trim();
	stripslashes(); removes backslashes
	 */
	 
	 
	 $data = "";
if(isset($_GET['data'])){
	$data = $_GET['data'];
}
	
	echo "<br>";
	  
	  
	  
	  
	  
	  
	echo "
		</body>
		</html>";
			
?>