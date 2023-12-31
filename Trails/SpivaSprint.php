<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Spiva Sprint</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
		.top-section {
            background-image: url('Library Night.jpg');
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
			<h2>MSSU Spiva Library</h2>
			<p>The Spiva Sprint is only 1/4 mile, but the elevation changes will test your endurance</p>
			<br>
			<p>Spiva Library was the first building built on the current campus following the properties purchase for use by what was then Missouri Southern College. 
			The library is named after prominent Joplin businessman George A. Spiva (1904–1967), who was a major donor and supporter of the school. 
			Expansions to the library in 1972–1973 and 1999–2000 have tripled the size of the original structure. Prior to 1987, the social sciences department 
			utilized some areas of the building for classrooms and offices</p>
			<br>
			<p>As you make your loop around the library, you will pass Reynolds and Nixon Halls. These buildings house the MSSU Science and Math departments. Connected by a skywalk, Nixon Hall was 
			completed in 2018. A trip inside these buildings will be greeted with many different reptile and aquatic creatures, currently under the care of the Biology department. These animals 
			are brought on campus either through donations or rescued from improper environments. Several of these creatures are on the endangered species list. </p>
		</div>
	</div>
	<div class="full-section">
        <div class="second-textbox">
            <h2>Trail Images</h2>
			<p>
            <img src="Page photos\Spiva View.jpg" alt="Spiva Library Image">
			<img src="Page photos\Nixon.jpg" alt="Nixon Hall Image">					
			<img src="Page photos\Spiva Night.jpg" alt="Spiva Library at Night Image">		
			<img src="Page photos\Skywalk.jpg" alt="Nixon Skywalk Image">
			<img src="Page photos\turtle.jpg" alt="Turtle Image">
			<img src="Page photos\snake.jpg" alt="Snake Image">
        </div>
       <div class='second-textbox' style="display: flex; flex-wrap: wrap; flex-direction: column;">
            <h2>Comments</h2>
            <?php
                session_start();
                $_SESSION['trailid'] = 4;
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