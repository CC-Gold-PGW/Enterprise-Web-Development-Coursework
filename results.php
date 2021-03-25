<?php
    // Establish DB Connection
    $con=mysqli_connect("localhost","root","qnAHzPvrrmE3y38R","Counter");

    // Error out if no DB can be found
    if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
    } else {

    // Get current vote counts
    $curCounts = mysqli_query($con, "SELECT * from `Counts`");
    $results = mysqli_fetch_array($curCounts, MYSQLI_NUM);

    mysqli_close($con);
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
	
    <!-- META -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="title" content="Anime: Yea or Nay" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	
    <!-- LOAD STYLESHEETS -->
    <link href="style/results.css" rel="stylesheet" type="text/css" media="all" />

	<!-- LOAD JQUERY -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
		integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
		crossorigin="anonymous"></script>

    <!-- LOAD DATA FILES -->
	<script src="data/data.js"></script>

	<!-- FIREBASE SETUP -->
	<!-- The core Firebase JS SDK is always required and must be listed first -->
	<script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-app.js"></script>
    <script>// Initialize Firebase
            firebase.initializeApp(firebaseConfig);
    </script>

	<!-- TODO: Add SDKs for Firebase products that you want to use
				 https://firebase.google.com/docs/web/setup#available-libraries -->
	<script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-auth.js"></script>    
    

</head>

<body>
    <div id="container">
        <div id="header">
            <h1>A N I M E</h1>
        </div>
        <div id="right">
            <label class="labl" id="lablRight">
                <!-- Display Nay Votes -->
                <div class="rad">Nay was chosen </br> <?php echo $results[1];?> Times</div>
            </label>
            <p class="results"> </p>
        </div>
        <div id="left">
            <label class="labl" id="lablLeft">
                <!-- Display Yea Votes -->
                <div class="rad">Yea was chosen </br> <?php echo $results[0];?> Times</div>
            </label>
        </div>
        <div id="footer">
            <a href="index.html">Go Back</a>
        </div>
    </div>
</body>

</html>