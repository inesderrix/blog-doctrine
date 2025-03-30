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
    <span>A</span><span>j</span><span>o</span><span>u</span><span>t</span><span>e</span><span>r</span>
    <span>u</span><span>n</span>
    <span>c</span><span>o</span><span>m</span><span>m</span><span>e</span><span>n</span><span>t</span><span>a</span><span>i</span><span>r</span><span>e</span>
</h1>


    <form action="index.php?action=ajouter-commentaire" method="POST">
        <input type="hidden" name="id_billet" value="<?= $_GET['id_billet'] ?>">

        <label for="commentaire">Votre commentaire :</label><br>
        <textarea id="commentaire" name="commentaire" rows="5" required></textarea><br><br>

        <input type="submit" class="btn" value="Ajouter le commentaire">
    </form>


    </main>
</body>
</html>
