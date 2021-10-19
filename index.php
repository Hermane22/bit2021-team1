<?php
session_start();
$bdd=new PDO('mysql:host=localhost;dbname=dps','root','akatsuki',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$allusers= $bdd->query('SELECT * FROM list ORDER BY fullname');
if(isset($_GET['s']) AND !empty($_GET['s'])){
    $recherche=trim(htmlspecialchars($_GET['s']));
    $allusers=$bdd->query('SELECT fullname,relationship,N FROM list WHERE fullname LIKE "%'.$recherche.'%" ORDER BY fullname');}
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
			<form action="" method="GET" class="search-bar">
				<input type="search" class="contact-search" name="s" placeholder="search contact">
				
			</form>

					<!--  ADD-CONTACT BUTTON/ICON -->
			<div class ="button-add">
				<a href="edit.php"><i> + </i></a>
			</div>
		</header>
			<hr>
		<section  class="contacts-library">
			<ul class="contacts-list">
				<?php 
				if($allusers -> rowCount() > 0){
					while($user = $allusers->fetch()){
						?>
				<a href="contact-profile.php?id=<?php echo $user['N']; ?>">
					<div class="contact-section">
						<li class="list__item">
							<p class="contact-name"><?php echo $user['fullname'] ; ?></p>
							<p class="relationship"><?php echo $user['relationship'] ; ?></p>
						</li>
					</div>
				</a>

			<hr>
				<?php
				}
			}else{
				?>
				<br>
				<h2>Not found :( </h2> 
				<?php
			} ?>
			</ul>
		</section>
	</div>

</body>
</html>