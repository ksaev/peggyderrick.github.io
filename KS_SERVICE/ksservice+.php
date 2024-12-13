<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home-ks_service</title>
    <link rel="stylesheet" href="ks_service.css">
</head>
<body>
    <header>
        <h1 class="ks">KS+ SERVICE</h1> 
    </header>
    <section class="prof">
        <img src="myprofil.png" alt="KS en personne">
        <h2 id="haut">Bienvenu sur la page officiel de <span>KS+ SERVICE</span> <br> votre agence professionnelle de prestations informatique</h2>
    </section>
    <nav>
        <ul>
           <a href=""> <li>Accueil</li> </a>  <a href=""><li>Nos prestations</li></a> <a href=""> <li>A propos</li></a> <a href=""><li>Contactez-nous</li></a>
        </ul>
    </nav>
    
    <main>
    <section class="sect">
        <h2 class="acc">Accueil</h2>
        <div class="photo">
            <div class="ph1">
                <img src="Accueil.jpg" alt="moi">
            </div>
            <div class="ph2">
                <img src="maphoto1.jpg" alt="">
            </div>
        </div>
        
        <div class="prestations">
         <h2 class="pres">Nos prestations</h2>
         <div class="men">
          <div class="service1">  
            <div class="titre">
                <img src="mainteance.jpeg" alt="">
                <h4>Maintenance</h4> 
            </div>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum in facilis tempora, dolores libero,  dolorem,  doloribus officiis ipsum at facere molestiae sunt commodi .Enim, ab? Totam praesentium iste ea sint?</p>
          </div>
            <div class="service2">
                <div class="titre">
                    <img src="pageweb.png" alt="">
                    <h4>Création de page web</h4>
                </div>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio ducimus facilis et alias quasi rem odit ipsam recusandae, minus dolorem libero quod, maxime animi. Vel ut perspiciatis odit ducimus quo.</p>
         </div>
        </div>
          <div class="men1">
            <div class="service3">
                <div class="titre">
                    <img src="security.jpeg" alt="">
                    <h4>Sécurité </h4>
                </div>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis nulla nemo reprehenderit sint est odit fugit placeat tempore saepe expedita! Pariatur totam nulla quas dolore libero ducimus maiores omnis dicta?</p>
            </div>
            <div class="service4">
                <div class="titre">
                    <img src="telephone.jpeg" alt="">
                    <h4>Téléphone</h4>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam consequuntur praesentium officia, repudiandae vero quam fugit exercitationem aliquid eos assumenda sunt sint laborum corporis. Minima cum consequuntur mollitia! In, hic!</p>
            </div>
        </div>    
    </section>
    <section class="section2">
        <h2 class="pres">Contactez-nous</h2>
        <div class="bu">
            <img src="bureau.jpg" alt="">
        </div>
        <form action="ksservice+.php" method="POST">
          <div class="for">
            <div class="wha">
                <img src="what.jpeg" alt="">
                <p>+225 07 58 89 92 66</p>
            </div>
            <input type="text" placeholder="nom" name="nom"><br><br>
            <input type="email" placeholder="example@gmail.com" name="email" id=""><br><br>
            <textarea name="com" placeholder="Entrer votre commentaire" cols="30" rows="10"></textarea><br><br>
            <input type="submit" value="Envoyer votre message">
          </div>
        </form>
    </section>
</main>
<div class="haut"><a href="#haut">En haut de la page</a></div><br><br>
<footer>
    <p>Tous droits réservés <span>KS+ SERVICE</span> &copy; 2022</p>
</footer>
</body>
</html>

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