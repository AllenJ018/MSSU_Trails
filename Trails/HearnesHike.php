<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hearnes Hike</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
		.top-section {
            background-image: url('Hearnes Hike2.jpg');
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
			<h2>MSSU Hearnes Hike</h2>
			<p>Coming in just shy of 1/3 mile, the Hearnes Hike offers elevation challenges, suitable for both beginners and experts alike. 
			The Hearnes Hike will take you on a loop around the Health Science, Education, and Kinesiology departments. </p>
			<br>
			<p>The Julio Leon Health Science Center is home to the MSSU Nursing, Dental Hygeine, EMS, Respiratory Therapy, 
			Radiology, Healthcare Administration, and Psychology departments. Taylor Education is home to Teacher Education, Adult Degree Completion, and the Acacia Center. 
			Young Gymnasium and the Leggett & Platt Athletic Center serves not only our Kinesiology students, but also our indoor athletic programs.</p>
			<br>
			<p>One of Southern's best kept secrets is the indoor swimming pool located in the lower level of Young Gymnasium. After you complete the MSSU trails, 
			take a few laps in the water to stretch out the muscles. </p>
			</div>
	</div>
	<div class="full-section">
        <div class="second-textbox">
            <h2>Trail Images</h2>
			<p>
			<img src="Page photos\Health Science.jpg" alt="Julio Leon Image">
			<img src="Page photos\Hearnes Front.jpg" alt="Hearnes Image">			
			<img src="Page photos\Taylor2.jpg" alt="Taylor Hall Image">
			<img src="Page photos\Hearnes Hike 1.jpg" alt="Hearnes Hike Uphill Image">		
			<img src="Page photos\Hearnes Hike 3.jpg" alt="Young Gym Image">
			<img src="Page photos\Leggett and Platt.jpg" alt="Leggett and Platt Image">
			<img src="Page photos\pool.jpg" alt="Pool Image">
	
        </div>

      <div class='second-textbox' style="display: flex; flex-wrap: wrap; flex-direction: column;">
            <h2>Comments</h2>
            <?php
                session_start();
                $_SESSION['trailid'] = 6;
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