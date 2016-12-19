

 <form action="../controleur/ajout_musique.ctrl.php" method="GET">
   <fieldset>
     <label for="Artiste">Artiste</label>
     <input type="texte" name="Artiste" id="Artiste" required />
     <label for="Titre">Titre</label>
     <input type="texte" name="Titre" id="Titre" required />
     <label for="Genre">Genre</label>
     <input type="texte" name="Genre" id="Genre" required />
     <input type="submit" name="action" value="Valider" />
   </fieldset>
 </form>


<?php
  if(isset($musique)){
    echo('<p>La musique : '.$musique->getArtiste().' - '.$musique->getTitre().' a été ajoutée</p>');
  }
  if(isset($musiques)){
    foreach ($musiques as $key => $value) {
      echo("<p>".$key." ".$value->getArtiste()." - ".$value->getTitre()." -- Caca : ".$value->getGenre()."</p> <br \>");
    }
  }

?>
