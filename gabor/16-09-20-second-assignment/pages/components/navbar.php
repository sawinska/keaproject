<!-- Navigation bar -->
<div class="o-grid c-navbar o-grid--align-center">
	<div class="o-grid o-wrapper__content">
		<div class="o-grid">
			<div class="o-grid__content o-grid o-grid--valign-center">
				<a class="c-navbar__logo" href="index.php?page=<?php echo $pHomePage->sPageName ?>">
					<img src="http://image.prntscr.com/image/489b77ecd2a54ab2992dc7a233e28d4c.png" alt="Stock Exchange Simulator" class="c-navbar__logo-image">
					<h1 class="c-navbar__logo-text"><?php echo $config -> sSiteTitle ?></h1>
				</a>
			</div>
		</div>
		<div class="o-grid">
			<div class="o-grid__content o-grid o-grid--align-right o-grid--valign-center">
				<ul class="o-list--horizontal">
					<li class='c-navbar__menu-item c-navbar__anchor-link'>Logged in as <span class='o-text--bold'><?php echo $_SESSION['userId']; ?></span></li>
					<li class='c-navbar__menu-item'><a href="index.php?page=home" class="c-navbar__anchor-link"><i class="fa fa-home fa-fw" aria-hidden="true"></i>Home</a></li>
					<?php if ($_SESSION['userRole'] == 'admin') : ?>
					<li class='c-navbar__menu-item'><a href="index.php?page=users" class="c-navbar__anchor-link"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Users</a></li>
					<?php endif; ?>
					<li class='c-navbar__menu-item'><a href="" id="navbar__logout" class="c-navbar__anchor-link"><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i>Logout</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<script>
	// Log user out 
	$("#navbar__logout").click(function(e){
		var link = '<?php echo $config->sApiPath ?>?request=logout';
		console.log(link);
		$.ajax({
			"url": link,
			"method": "get",
			"cache": false,
			"dataType": "json",
			"data": {
				// Data to send
			}
		}).done(function(jData){
			console.log(jData);
		}).fail(function(jData){
			// Fail
			console.log(jData);
		})
	});
</script>