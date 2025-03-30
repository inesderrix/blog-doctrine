<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
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
    <span>C</span><span>o</span><span>n</span><span>n</span><span>e</span><span>x</span><span>i</span><span>o</span><span>n</span>
</h1>


    
<div class="form">

	<form action="index.php?action=traitelogin" method="POST">
		
		<label for="login">Login:</label>
        <input type="text" id="login" name="login" required> <br><br>

        	<label for="mdp">Mot de passe :</label>
        <input type="password"  id="mdp" name="mdp" required>

        
<br>

<?php 
if (isset($_SESSION['login_error'])) {
    echo "<div class='message error'>{$_SESSION['login_error']}</div>";
    
    unset($_SESSION['login_error']);
}
?><br>

<button type="submit"  class="btn">Valider</button>

</form>

<br>
 </div>
</main>
</body>
</html>

        