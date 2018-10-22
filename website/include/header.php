<?php

	// Assume the user is not logged in and not an admin
	$isadmin = FALSE;
	$loggedin = FALSE;

	// If we have a session ID cookie, we might have a session
	if (isset($_COOKIE['sessionid'])) {

		$user = $app->getSessionUser($errors);
		$loggedinuserid = $user["userid"];

		// Check to see if the user really is logged in and really is an admin
		if ($loggedinuserid != NULL) {
			$loggedin = TRUE;
			$isadmin = $app->isAdmin($errors, $loggedinuserid);
		}

	} else {

		$loggedinuserid = NULL;

	}


?>
	<div class="nav">
		<ul>
		<li><a href="index.php">Home</a></li>
		&nbsp;&nbsp;
		<?php if (!$loggedin) { ?>
			<li><a href="login.php">Login</a></li>
			&nbsp;&nbsp;
			<li><a href="register.php">Register</a></li>
			&nbsp;&nbsp;
		<?php } ?>
		<?php if ($loggedin) { ?>
			<li><a href="list.php">List</a></li>
			&nbsp;&nbsp;
			<li><a href="editprofile.php">Profile</a></li>
			&nbsp;&nbsp;
			<?php if ($isadmin) { ?>
				<li><a href="admin.php">Admin</a></li>
				&nbsp;&nbsp;
			<?php } ?>
			<li><a href="fileviewer.php?file=include/help.txt">Help</a></li>
			&nbsp;&nbsp;
			<li><a href="logout.php">Logout</a></li>
			&nbsp;&nbsp
		<?php } ?>
		<div class="name">
			<li>IT 5236</li>
		</div>
	</ul>
	</div>
	<h1></h1>
