<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dormitory Shuffle</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
		.top-section {
            background-image: url('Dorms.jpg');
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
			<h2>MSSU Dormitory Shuffle</h2>
			<p>Spend some time on the Residence Life side of campus while completing the Dormitory Shuffle.
			This nearly half-mile course will take you around the many different dormitory facilities 
			MSSU has to offer students. From the 4-bedroom quads, to the private rooms in the Lion Village, there is something 
			for everyone. </p>
			<br>
			<p>Once you finish up the Shuffle, you might find yourself feeling a bit hungry. Take a 
			break in the Mayes Student Life Center and grab a bite to eat in the dining hall. Featuring 
			5 different all-you-can-eat buffets, all for one low price, you will not find a better deal 
			for fueling back up.</p>
		</div>
	</div>
	<div class="full-section">
        <div class="second-textbox">
            <h2>Trail Images</h2>
			<p>
			<img src="Page photos\Dorms 2.jpg" alt="East Image">
			<img src="Page photos\Dorms 3.jpg" alt="Apartments Image">	
			<img src="Page photos\Dorms 4.jpg" alt="Lion Village Image">
			<img src="Page photos\Quad.jpg" alt="Quads Image">
			<img src="Page photos\Mayes.jpg" alt="Dining Image">
			<img src="Page photos\Mayes 2.jpg" alt="Mayes Image">
        </div>

        <div class='second-textbox' style="display: flex; flex-wrap: wrap; flex-direction: column;">
            <h2>Comments</h2>
            <?php
                session_start();
                $_SESSION['trailid'] = 9;
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