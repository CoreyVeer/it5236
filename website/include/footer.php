<p class="footer">Copyright &copy; <?php echo date("Y"); ?> Corey Heiple</p>
<?php

if ($_COOKIE['debug'] == "true") {
	echo "<h3>Debug messages</h3>";
	echo "<pre>";
    foreach ($app->debugMessages as $msg) {
		var_dump($msg);
	}
	echo "</pre>";
}

?>
