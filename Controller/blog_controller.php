<?php

$nu_articles = new Article();
$articles = $nu_articles -> getAllArticles();


if(isset($_GET['lire'])){
    $id = $_GET['lire'];
  $one_art = $nu_articles -> getOneArt(intval($id));
}
