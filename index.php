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
			
			<form action="test.php" method="GET" class="search-bar">
				<input type="search-name" class="contact-search" name="terme" placeholder="search contact">
				<input type = "submit" name = "s" value = "Rechercher"> 
			</form>



				<!--  ADD-CONTACT BUTTON/ICON -->
	<div class ="button-add">
		<a href="edit.php"><i> + </i></a>
	</div>

		</header>
		<hr>
        

		<!--  CONTACT LIST -->
		<section class="contacts-library">
				<ul class="contacts-list">
			
					<?php
						$reponse=$bdd->query('SELECT * FROM list  ORDER BY fullname');
						while($donnees=$reponse->fetch()){ ?>

					<a href="contact-profile.php?id=<?php echo $donnees['N']; ?>">
		
						<div class="contact-section">
							<li class="list__item">
								<p class="contact-name"><?php echo $donnees['fullname'] ; ?></p>
								<p class="relationship"><?php echo $donnees['relationship'] ; ?></p>
							</li>
						</div>
					</a>

					<hr>
					<?php
						}
					?>
				</ul>
			</section>
	</div>


			

</body>
</html>