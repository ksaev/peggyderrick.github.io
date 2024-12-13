<?php
include("C:\wamp64\www\KS_SERVICE\connexion.php");
@$name=$_POST['nom'];
@$mail=$_POST['email'];
@$comm=$_POST['com'];

$req=("INSERT INTO  avis values('$name','$mail','$comm')");
$res=mysql_query($req);
if($res){
    echo ("ajoutée avec succès");
}
else{
    echo("non ajoutée");
}

?>