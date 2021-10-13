<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style-ed.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
	<title>Edit Contact</title>
</head>
<body>

	<div class="container">
		<header class="hero">
			
			<a href="index.php">
			<i class="fas fa-arrow-left"></i>
			</a>
			<div class="hero-info">
				 <h3>Create new contact</h3>
               <img src="IMG/user1.png" alt="utili">
			</div>
		</header>

		<form action="request.php" method="post">
		<section class="contact-info">

		<div class="info-line">
			   <i class="fas fa-user"></i>
				<input type="text" class="type" name="fullname" placeholder="Full Name">
					
			</div>

			<div class="info-line">
		      	<i class="fas fa-heart"></i>
				<input type="text" class="type" name="relationship" placeholder="Relationship">
			</div>

			<div class="info-line">
			    <i class="fas fa-phone"></i> 
				<input type="text" class="type" name="phone" placeholder="Phone Number">  
			</div>

			<div  class="info-line">
		     	<i class="far fa-envelope"></i>
				<input type="text" class="type" name="mail" placeholder="Email">
			</div>

			

			<div class="info-line">
			    <i class="fas fa-address-card"></i>
				<input type="text" class="type" name="addresse" placeholder="Address">
			</div>
			

		</section>

		<section class="button-container">
			<div class="update-contact">
			    <i class="far fa-save"></i>
				<input type="submit" value="Save">
			</div>
		</section>

		</form>
	</div>


</body>
</html>
