<?php
ini_set('display_errors', 1);
error_reporting(E_ALL|E_STRICT);
// Connects to your Database 
$con = mysqli_connect("Localhost", "root", "qnAHzPvrrmE3y38R", "Counter");

if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	exit;
  }

//Adds one to the counter
mysqli_query("SELECT `Counter`.`Yea` FROM `Counter`= counter + 1");
//Retrieves the current count
$count = mysqli_fetch_row(mysqli_query("SELECT `Counter`.`Yea` FROM `Counter`;"));
//Displays the count on your site
print "$count[0]"; 
?>

<!DOCTYPE html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="title" content="Anime: Yea or Nay" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="style.css" rel="stylesheet" type="text/css" media="all" />

	<!-- Load Jquery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
		integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
		crossorigin="anonymous"></script>

	<!-- FIREBASE SETUP -->
	<!-- The core Firebase JS SDK is always required and must be listed first -->
	<script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-app.js"></script>

	<!-- TODO: Add SDKs for Firebase products that you want to use
				 https://firebase.google.com/docs/web/setup#available-libraries -->
	<script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-auth.js"></script>

	<script>
		// Your web app's Firebase configuration
		var firebaseConfig = {
			apiKey: "AIzaSyDmxEBhnQIdlvSpCnfXJG7BX-7sugFCojE",
			authDomain: "ewebdev-730af.firebaseapp.com",
			projectId: "ewebdev-730af",
			storageBucket: "ewebdev-730af.appspot.com",
			messagingSenderId: "289113341600",
			appId: "1:289113341600:web:d2db0766a56bfa1a3013c5"
		};
		// Initialize Firebase
		firebase.initializeApp(firebaseConfig);
	</script>

	<script src="index.js"></script>
	<script src="authScripts.js"></script>
	<script src="htmlScripts.js"></script>
	<script src="data.js"></script>

</head>

<body>

	<div id="banner">

		<div id="left-margin">

			<label for="yea">Yea</label>
			<input id="yea" type="radio" name="yeaNay">

		</div>

		<div id="contents">

			<div id="header">

				<h1>A N I M E</h1>
				<h2>Yea or Nay</h2>

			</div>


		</div>

		<div id="right-margin">

			<label for="nay">Nay</label>
			<input id="nay" type="radio" name="yeaNay">

		</div>

		<div id="footer">

			<div id="loginArea"></div>
			<div id="errorArea"></div>

		</div>

	</div>

</body>