<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <span>M</span><span>o</span><span>d</span><span>i</span><span>f</span><span>i</span><span>e</span><span>r</span>
    <span>l</span><span>e</span>
    <span>b</span><span>i</span><span>l</span><span>l</span><span>e</span><span>t</span>
</h1>

<form action="index.php?action=traite-modification" method="post">
    <input type="hidden" name="id" value="<?php echo htmlspecialchars($post->getId()); ?>">

    <label for="titre">Titre :</label>
    <input type="text" id="titre" name="titre" value="<?php echo htmlspecialchars($post->getTitre()); ?>">

    <label for="contenu">Contenu :</label>
    <textarea id="contenu" name="contenu"><?php echo htmlspecialchars($post->getContenu()); ?></textarea>

    <button type="submit" class="btn">Modifier</button>
</form>

</main>
</body>
</html>
