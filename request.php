
<?php
$bdd=new PDO('mysql:host=localhost;dbname=dps','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$requete=$bdd->prepare('INSERT INTO list(fullname,relationship,phone,mail,addresse,datet) VALUES (?,?,?,?,?,Now())');

$requete->execute(array($_POST['fullname'],$_POST['relationship'], $_POST['phone'],$_POST['mail'],$_POST['addresse']));

if($requete) {
   echo "<div>
     <h3>Save succesfully.</h3>
</div>";
echo "save successfully go <a href='index.php'>back</a>";

}else{
    echo "<div>
    <h3>Contact saving failled... Retry.</h3>
</div>";
include("index.php");
}
?>

