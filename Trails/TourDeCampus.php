<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tour De Campus</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
		.top-section {
            background-image: url('Campus.jpg');
            /* Specify background image behavior */
            background-size: cover; /* Cover the entire container */
            background-position: center; /* Center the image */
            padding: 100px 0; /* Adjust padding for spacing */
            text-align: center;
            color: white;
        }
        .textbox {
            width: 300px;
            margin: 50px auto; /* Centers the box horizontally */
            background-color: rgba(13, 102, 56, 0.8); 
            padding: 20px;
            color: white;
        }
		 .full-section {
            background-color: #E9CF38; /* Gold background color */
            padding: 50px 0;
            text-align: center;
            color: white; /* Text color for the second section */
        }
        .second-textbox {
            width: 80%;
            margin: 20px auto;
            background-color: #669657;
            padding: 20px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5); /* Adding a shadow effect */
            display: flex; /* Use flexbox for layout */
            justify-content: space-around; /* Evenly distribute elements */
            align-items: center; /* Center items vertically */
            flex-wrap: wrap; /* Allow items to wrap to the next line if needed */
        }
        /* Adjust the size of the images inside the text box */
        .second-textbox img {
            max-width: 45%; /* Adjust the width of each image */
            height: auto;
            margin: 5px; /* Add some spacing between images */
        }
    </style>
</head>
<body>
	<div class="top-section">
		<div class="textbox">
			<h2>MSSU Tour De Campus</h2>
			<p>See everything MSSU has to offer with the Tour De Campus. </p>
			<br>
			<p>This trail will take you around the academic side of campus, including several 
			elevation challenges. With a few slight changes in direction, you can get a different
			level of workout with each lap. On this trail, you will pass the Plaster School of Business, Ummel Technology, the Billingsly Student Center
			the Oval and all buildings that go around.</p>
			<br>
			<p>On the Tour De Campus, one will realize there is one building that sticks out from the rest. 
			The Mission Hills Mansion was the original farm house on what would eventually become the MSSU Campus.The mansion, built in 1926 for Lucius and Ethel Buchanan. 
			The mansion is a Spanish Revolutions style construction, and many of the original features are still found throughout. 
			The Mission Hills Mansion currently houses the Ralph L. Gray Alumni Center.</p>			
		</div>
	</div>
	<div class="full-section">
        <div class="second-textbox">
            <h2>Trail Images</h2>
			<p>
			<img src="Page photos\Plaster.jpg" alt="Plaster Image">
			<img src="Page photos\Campus Fall.jpg" alt="Campus Fall Image">
			<img src="Page photos\Billingsly.jpg" alt="Billingsly Image">
			<img src="Page photos\Mansion Fountain.jpg" alt="Mansion Fountain Image">
			<img src="Page photos\Oval Flowers.jpg" alt="Oval Image">
			<img src="Page photos\CampusDawn.jpg" alt="Dawn Image">
			<img src="Page photos\MansionFront.jpg" alt="Mansion Image">
			<img src="Page photos\OriginalMansion.jpg" alt="Original Mansion Image">
        </div>

    <div class='second-textbox' style="display: flex; flex-wrap: wrap; flex-direction: column;">
            <h2>Comments</h2>
            <?php
                session_start();
                $_SESSION['trailid'] = 10;
                include('trailComments.php');  
            ?>
        
            <link rel="stylesheet" type="text/css" href="btn.css">
            <form method="post" action="addComment.php">
                <textarea id="trail_comment" name="txtcomment" rows="4" cols="50"></textarea>
                <br>
                <input type="submit" class="sink-on-hover" value="Add Comment" name="insertComment">
            </form>
        </div>

    </div>
</body>
</html>