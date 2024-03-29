<!-- Stock Exchange -->
<!-- 2nd mandatory assignment - single page application -->
<!-- Gabor Pinter - http://github.com/gaboratorium/keaproject -->

<?php 
	// Start session on page load
	session_start();

	// Load site configurations and site router
	include_once "config/config.php";
	include_once $config -> sRouterPath;
?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $config -> sSiteTitle ?></title>
		<!-- JavaScript: jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<!-- JavaScript: jQuery sha256 -->
		<script src="js/sha256.jquery.debug.js"></script>
		<!-- JavaScript: ChartJs -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>
		<!-- Style: Font awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<!-- Style: Roboto font -->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<!-- Style: Custom - base (html tags), objects (shared), ui components -->
		<link rel="stylesheet" href="style/base.body.css">
		<link rel="stylesheet" href="style/base.form.css">
		<link rel="stylesheet" href="style/base.typography.css">
		<link rel="stylesheet" href="style/base.table.css">
		<link rel="stylesheet" href="style/objects.grid.css">
		<link rel="stylesheet" href="style/objects.text.css">
		<link rel="stylesheet" href="style/objects.list.css">
		<link rel="stylesheet" href="style/objects.wrapper.css">
		<link rel="stylesheet" href="style/objects.form.css">
		<link rel="stylesheet" href="style/components.login-box.css">
		<link rel="stylesheet" href="style/components.navbar.css">
		<link rel="stylesheet" href="style/components.title-bar.css">
	</head>
	<body>
		<?php include_once $pPage->sPageUrl; ?>
	</body>
</html>