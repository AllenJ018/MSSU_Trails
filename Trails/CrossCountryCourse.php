<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cross Country Course</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
		.top-section {
            background-image: url('CrossCountry1.jpg');
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
			<h2>MSSU Cross Country Course</h2>
			<p>The MSSU Cross Country Tom Rutledge Course is a 3.2 mile all natural course nestled in the north east corner of campus.
			This course is used year after year for large scale cross country meets, featuring both high school and collegiate events.
			In 2023, the NCAA Division II National Championships were held on this course.</p>
			<br>
			<p>Not only is the surface of the trail all natural, the borders of the course are also natural, creating a unique running experience.</p>
		</div>
	</div>
	<div class="full-section">
        <div class="second-textbox">
            <h2>Trail Images</h2>
			<p>
			<img src="Page photos\CC_overview.jpg" alt="Cross Country Image">
			<img src="Page photos\CC Start.jpg" alt="Cross Country Start Image">
			<img src="Page photos\cross country2.jpg" alt="Cross Country Runner Image">
			<img src="Page photos\CC Overview2.jpg" alt="Cross Country Overview Image">
		</div>

       <div class='second-textbox' style="display: flex; flex-wrap: wrap; flex-direction: column;">
            <h2>Comments</h2>
            <?php
                session_start();
                $_SESSION['trailid'] = 12;
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