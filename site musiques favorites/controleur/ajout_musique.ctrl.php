<?php
  require_once('../modele/Database.class.php');
  require_once('../modele/Musique.class.php');



  // Creation de l'instace DAO
  $dao = new Database();
  $musique = $dao->addMusic($_GET['Artiste'], $_GET['Titre'], $_GET['Genre']);

  $musiques = $dao->readMusics();

  include('../vue/test.vue.php');

?>
