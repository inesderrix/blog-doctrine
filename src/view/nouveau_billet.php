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
    <span>C</span><span>r</span><span>é</span><span>a</span><span>t</span><span>i</span><span>o</span><span>n</span> <span>d</span><span>'</span><span>u</span><span>n</span> <span>n</span><span>o</span><span>u</span><span>v</span><span>e</span><span>a</span><span>u</span> <span>b</span><span>i</span><span>l</span><span>l</span><span>e</span><span>t</span>
</h1>
<div class="form">
    <form action="index.php?action=ajouter-billet" method="POST">
        <label for="titre">Titre du billet :</label><br>
        <input type="text" id="titre" name="titre" required><br><br>

        <label for="contenu">Contenu du billet :</label><br>
        <textarea id="contenu" name="contenu" rows="10" cols="50" required></textarea><br><br>

        <input type="submit" class="btn" value="Créer le billet">
    </form>
</div>
    </main>
</body>
</html>