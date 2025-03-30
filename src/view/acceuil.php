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
    <span>C</span><span>i</span><span>n</span><span>é</span><span>g</span><span>r</span><span>a</span><span>p</span><span>h</span><span>i</span><span>e</span>
    <span> </span>
    <span>C</span><span>r</span><span>i</span><span>m</span><span>i</span><span>n</span><span>e</span><span>l</span><span>l</span><span>e</span>
</h1>
<p class="alinea">Bienvenue sur mon blog ! Passionné par le cinéma, je vous invite à découvrir ici des films qui nous plongent dans l'univers fascinant des thrillers psychologiques.Les films que je vous propose ici ne se contentent pas de raconter des histoires de crime, mais nous plongent dans les profondeurs de l'âme humaine, questionnant la morale, l’obsession et l’injustice. Que vous soyez un amateur de suspense ou un cinéphile passionné, ces récits puissants et souvent dérangeants sauront captiver votre esprit et vous laisser une empreinte durable.

<h2>Derniers billets</h2>
</p>
   <?php if (!empty($posts)){ ?>
    <?php foreach ($posts as $post){ ?>
        <div class="billet">
            <h2><?= $post->getTitre(); ?></h2>
            <p><?=$post->getContenu(); ?></p>
            
            <small>Publié le <?= $post->getDate()->format('d/m/Y'); ?></small>
            <div class="info">
                <?php
                  if ($isAdmin){
                    ?>
              <a href="index.php?action=modifier&id=<?= $post->getId() ?>">Modifier</a>
              <a href="index.php?action=supprimer&id=<?php echo $post->getId(); ?>"
            onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce billet ?');"> Supprimer</a>
            <?php
        }
        ?>
            
            
 <a style="text-decoration:underline;"  onclick="toggleComments(<?= $post->getId(); ?>)">Commentaires</a>
 </div>
  <hr>

           
            <div class="comments-section " id="comments-<?= $post->getId(); ?>">
            
                <?php 
                    
                    $comments = $postController->getCommentsForPost($post->getId()); 
                    if (!empty($comments)) {
                        foreach ($comments as $comment) {
                             $authorName = $commentController->getAuthorName($comment->getIdAuteur());
                ?>
                            <div class="commentaire">
                                <p><?= htmlspecialchars($comment->getCommentaire()); ?></p>
                                <small class="datecom">Posté le <?= $comment->getDatecom()->format('d/m/Y'); ?> par <?= htmlspecialchars($authorName); ?> </small>
                            </div>
                            <hr>
                <?php 
                        }
                    } else {
                        echo "<p>Aucun commentaire pour ce billet.</p>";
                    }
                ?>

            </div>
            <?php 
            
          
        if ($isConnected){ ?>
            <a href="index.php?action=ajouter-commentaire&id_billet=<?= $post->getId(); ?>">Ajouter un commentaire</a>

            <?php
            } else{
            ?>
            <p>Connectez-vous pour pouvoir ajouter un commentaires</p>
            <?php
            } 
            ?>
             </div>
    <?php };
 } ?>

<?php if ($afficherTous) {?>
    <a href="index.php?action=accueil&afficher=last" class="btn">Afficher les 3 derniers</a>
<?php } 
else { ?>
    <a href="index.php?action=accueil&afficher=all" class="btn">Afficher tous</a>
<?php }  ?>
</main>
</body>
</html>

<script>
   
    function toggleComments(postId) {
        var commentsSection = document.getElementById('comments-' + postId);
        if (commentsSection.style.display === 'none' || commentsSection.style.display === '') {
            commentsSection.style.display = 'block';  
        } else {
            commentsSection.style.display = 'none';  
        }
    }
</script>