<?php
session_start();
$bdd=new PDO('mysql:host=localhost;dbname=dps','root','akatsuki',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">

	<title>Contact Form</title>
</head>
<body>

	<div class="container">
		<!--  SEARCH FORM -->
		<header class="header" style= background-color: white; >
			
			<form class="search-bar">
				<input type="search-name" class="contact-search" name="search-area" placeholder="  search contact">
			</form>

		</header>
		<hr>

		<!--  CONTACT LIST -->
		<section class="contacts-library">
			<ul class="contacts-list">

				<a href="contact-profile.php">
					<div class="contact-section">
						<li class="list__item">
							<p class="contact-name">Hermane BAGORO</p>
							<p class="relationship">Friend</p>
						</li>

					</div>
				</a>

			</ul>
		</section>
	</div>

	<!--  ADD-CONTACT BUTTON/ICON -->
			<a href="edit.php"><i> + </i></a>

</body>
</html>