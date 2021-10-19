

<?php
$bdd=new PDO('mysql:host=localhost;dbname=dps','root','akatsuki',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$fullname=htmlspecialchars($_POST['fullname']);
$relationship=htmlspecialchars($_POST['relationship']);
$phone=htmlspecialchars($_POST['phone']);
$mail=htmlspecialchars($_POST['mail']);
$addresse=htmlspecialchars($_POST['addresse']);
$id=$_GET['id'];

$requete=$bdd->prepare("UPDATE list SET fullname='$fullname', relationship='$relationship', phone='$phone', mail='$mail', addresse='$addresse' WHERE N=".$_GET['id']);
$requete->execute();


if($requete) {
  header("location:contact-profile.php?id=".$_GET['id']);

}else{
    echo "<div>
    <h3>Contact update failled... Retry.</h3>
</div>";
include("index.php");
}
?> 

