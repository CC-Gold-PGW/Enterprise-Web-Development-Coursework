<?php
    $con=mysqli_connect("localhost","root","qnAHzPvrrmE3y38R","Counter");

    if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
    } else {

    $curCounts = mysqli_query($con, "SELECT * from `Counts`");
    $results = mysqli_fetch_array($curCounts, MYSQLI_NUM);

    $sql = "UPDATE Counts SET Nay=$results[1]+1";  
    mysqli_query($con, $sql);

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
    <link href="style/thankYou.css" rel="stylesheet" type="text/css" media="all" />    

</head>

<body>
    <div id="container">
        <h1>Thank You for voting Nay to Anime!</h1>
        <a href="index.html">Go Back</a>
    </div>
</body>

</html>