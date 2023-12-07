<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Webster Walk</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
		.top-section {
            background-image: url('Webster3.jpg');
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
			<h2>MSSU Webster Hall, Spiva Art Gallery, and Taylor Performing Arts Center</h2>
			<p>The Webster Walk is a short, 1/4 mile loop that will take you on a journey through history.</p>
			<br>
			<p>One of the first buildings completed on campus, the Fine Arts Building is home to MSSU's Art, Music, and Theatre departments. 
			Also on this trail, you will see some important pieces of Joplin History. Located right outside of the Spiva Art Gallery, you will see a brick pillar with a stone Lion Head. This statue was 
			originally displayed over the main entrance to the Connor Hotel, prior to collapsing in 1978.</p>
			<br>
			<p>In 2023, construction completed on a 3 year, multi-million dollar renovation project in the Taylor Performing Arts Center. The auditorium is utilized by both campus and the local community for 
			concerts, theatre productions, ceremonies, and many other events. Depending on when you walk this path, you might be able to drop inside for some added entertainment. </p>
		</div>
	</div>
	<div class="full-section">
        <div class="second-textbox">
            <h2>Trail Images</h2>
			<p>
			<img src="Page photos\Spiva Art Lion.jpg" alt="Lion Statue Image">
            <img src="Page photos\Webster 1.jpg" alt="Webster Hall Image">
			<img src="Page photos\Webster 3.jpg" alt="Webster Walk Image">
			<img src="Page photos\Webster Walk3.jpg" alt="TPAC Image">
			<img src="Page photos\Webster4.jpg" alt="Webster Image">

        </div>

    <div class='second-textbox' style="display: flex; flex-wrap: wrap; flex-direction: column;">
            <h2>Comments</h2>
            <?php
                session_start();
                $_SESSION['trailid'] = 3;
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