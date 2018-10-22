<?php

// Import the application classes
require_once('include/classes.php');

// Create an instance of the Application class
$app = new Application();
$app->setup();

// Declare an empty array of error messages
$errors = array();

// If someone has clicked their email validation link, then process the request
if ($_SERVER['REQUEST_METHOD'] == 'GET') {

	if (isset($_GET['id'])) {

		$success = $app->processEmailVerification($_GET['id'], $errors);
		if ($success) {
		    header("Location: thing.php");
		}

	}

}

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>russellthackston.me</title>
	<meta name="description" content="Russell Thackston's personal website for IT 5233">
	<meta name="author" content="Russell Thackston">
	<link rel="stylesheet" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


<body>
	<?php include 'include/header.php'; ?>
	<div class="field">
	<h2>Validate Login</h2>
	<form method="post" action="twofactor.php">
		<input type="text" name="validaitoncode" id="validationcode" placeholder="Enter validation ID" value="<?php echo $validationid; ?>" />
		<br/>
	</form>
	</div>

	<?php include 'include/footer.php'; ?>
	<script src="js/site.js"></script>
</body>
</html>
