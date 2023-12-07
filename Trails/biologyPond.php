<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Biology Pond </title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
		.top-section {
            background-image: url('Bio Pond.jpg');
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
            background-color: rgba(13, 102, 56, 0.75); 
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
			<h2>Biology Pond</h2>
			<p>The MSSU Biology Pond trail is a natural trail that serves both walkers and runners.
			This half mile loop provides unlimited views of nature. The Biology Pond was once home to a concrete
			swimming pool, made for the Mission Hills Estate, the privately owned farm that was on the property prior to 
			the MSSU campus. A natural spring fed into the pool from the base of the hill. When the concrete was removed in the 1970s, 
			a pond was left in its place.</p>
			<br>
			<p>The MSSU Biology Pond is used by students in the Biology and Environmental Science degrees. These students not only use the 
			pond and the many species that live in and around it for studies, they also mantain the trail and surrounding area to ensure it is 
			a safe, natural habit for all.</p>
		</div>
	</div>
	<div class="full-section">
        <div class="second-textbox">
            <h2>Trail Images</h2>
			<p>
            <img src="Page photos\Bio Pond trail2.jpg" alt="Trail Image">
			<img src="Page photos\bio Pond trail.jpg" alt="Second Trail Image">
			<img src="Page photos\Pond Dawn.jpg" alt="Dawn Trail Image">
			<img src="Page photos\Pond Trail.jpg" alt="Third Trail Image">
			<img src="Page photos\OriginalPond.jpg" alt="Mansion Pool Image">
        </div>

        <div class='second-textbox' style="display: flex; flex-wrap: wrap; flex-direction: column;">
            <h2>Comments</h2>
            <?php
                session_start();
                $_SESSION['trailid'] = 1;
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

