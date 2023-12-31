<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Oval Loop</title>
    <style>
        body {
            background-image: url('Oval 2.jpg');
            background-size: cover; 
			background-position: center; 
            background-repeat: no-repeat; 
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
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
    <div class="textbox">
        <h2>MSSU Oval</h2>
        <p>The Oval, as it is referred to on campus, is a constant hub of activity. It not only connects multiple buildings on campus, it also serves as a staging 
		area for many different activities. From Community Involvement Day, to picnics, to homecoming festivites, you can always find something going on around the Oval.</p>
		<br>
        <p>The Oval Loop is a quick course, coming in just under a quarter of a mile in length. With the close proximity to many campus buildings, the Oval Loop is 
		the perfect choice for any time of day. You can take a quick brain break and make one loop, or get in a mile and complete five. This loop offers something for everyone.</p>
    </div>
	<div class="full-section">
        <div class="second-textbox">
            <h2>Trail Images</h2>
			<p>
            <img src="Page photos\Oval night.jpg" alt="Oval at night Image">
			<img src="Page photos\Oval 4.jpg" alt="Oval Section Image">
			<img src="Page photos\Lions.jpg" alt="Students Image">
			<img src="Page photos\Oval Arieal.jpg" alt="Oval Overview Image">
			<img src="Page photos\Oval Movie.jpg" alt="Movie Image">	


        </div>

        <div class='second-textbox' style="display: flex; flex-wrap: wrap; flex-direction: column;">
            <h2>Comments</h2>
            <?php
                session_start();
                $_SESSION['trailid'] = 2;
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