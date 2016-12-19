<?php
  require_once('../modele/Database.class.php');
  require_once('../modele/Musique.class.php');

  // Creation de l'instace DAO
  $dao = new Database();

  $musiques = $dao->readMusics();
  include('../vue/test.vue.php');

 ?>
