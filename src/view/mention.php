<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
    <link rel="stylesheet" href="./src/style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anonymous+Pro:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

</head>
<header>
    <nav>


            <?php 
            
          
        if ($isConnected){ ?>
                <p>Bienvenue, <?= $_SESSION["login"]; ?> !</p> 
                 <?php }  ?>
                <div class="nav">
                 <a href="index.php?action=accueil">Accueil</a>
                 
                 <?php 
        if ($isConnected){  ?>
             <a href="index.php?action=deconnexion">Déconnexion</a>
        
            <?php } else {  ?>
                <a href="index.php?action=connexion">Se connecter</a>
            <a href="index.php?action=inscription-view">S'incrire</a>
             <?php 

    }

    if ($isAdmin){
    
    ?>
    <a href="index.php?action=nouveau-billet"> Nouveau billet</a>        
        <?php } 
        
            ?>
   <a href="index.php?action=mention">Mention légales</a>
        </nav>
        </div>
</header>
<body>
 
    <main>
           <h1>
    <span>M</span><span>e</span><span>n</span><span>t</span><span>i</span><span>o</span><span>n</span><span>s</span> <span>l</span><span>é</span><span>g</span><span>a</span><span>l</span><span>e</span><span>s</span>
</h1>


        <p>
            Éditeur du site :
    IUT de Marne-la-Vallée - Université Gustave Eiffel
    <br>
Adresse : 2 Rue Albert Einstein, 77420 Champs-sur-Marne <br>
Tél  : 01 60 95 85 85
<br>
Ce site est un projet étudiant réalisé dans le cadre de nos études en BUT MMI à L'IUT de Marne-la-Vallée - Université Gustave Eiffel.</p>
<br>
<p>
Responsable de la publication : <br>
<p class="alinea">Nom : Ines Derri </p>
<p class="alinea">Email : ines.derri@edu.univ-eiffel.fr</p></p>

<br>
<p>Hébergeur : <br>
<p class="alinea">Nom : o2switch</p>
<p class="alinea">Adresse : 222-224 Boulevard Gustave Flaubert, 63000 Clermont-Ferrand, France </p>
<p class="alinea">Site web : <a href="https://www.o2switch.fr">https://www.o2switch.fr</a></p></p>

<br>

<p>O2switch en tant que fournisseur de la plateforme, a son propre Délégué à la Protection des Données (DPO) et met en œuvre des mesures de protection conformes aux réglementations. Pour en savoir plus sur la politique de confidentialité de o2switch, vous pouvez consulter leur page dédiée : <a href="https://www.o2switch.fr/du-rgpd.pdf">https://www.o2switch.fr/du-rgpd.pdf</a></p>
<br>
<p>Ce projet n'a pas de DPO désigné, étant donné son contexte étudiant et non commercial. Toutefois, pour toute question relative à la protection des données personnelles dans le cadre de ce projet, vous pouvez nous contacter à l’adresse suivante : <br>
E-mail : ines.derri@edu.univ-eiffel.fr </p>
<br>

<p>Ce site a été conçu dans le cadre d’un projet étudiant par Ines Derri de l’Université Gustave Eiffel.</p> 

<br>
<p>Ce site aborde des sujets relatifs à des films, des documentaires et des séries, notamment les films Seven, Zodiac, Les Usual Suspects et Le Silence des Agneaux. En outre, un documentaire Netflix intitulé Zodiac : Qui vous parle est également évoqué. Ces références sont utilisées dans le cadre d'articles d'analyse et d'opinion.</p>

<br>
<p>Image de fond :
<p class="alinea">
L'image de fond utilisée sur ce site a été trouvée sur Pinterest. Vous pouvez consulter l'original à cette adresse :  <a href=" https://fr.pinterest.com/pin/70437487013242/"> https://fr.pinterest.com/pin/70437487013242/</a> </p>
</p>
<br>





        
        <p>Cookies :
<p class="alinea">
Ce site ne collecte pas de cookies ni d'autres informations de suivi personnel. Aucune donnée personnelle n'est stockée par le biais de cookies ou de technologies similaires.</p></p>
    </main>
</body>