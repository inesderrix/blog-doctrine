<?php

require_once "bootstrap.php";

$post=new Post();
$post->setTitre('Mon titre');
$post-> setContenu('Voici mon contenue');
$post->setDate(new Datetime());

var_dump($post);

$entityManager->persist($post);
$entityManager->flush();

echo ("le post est ".$post->getTitre());

?>