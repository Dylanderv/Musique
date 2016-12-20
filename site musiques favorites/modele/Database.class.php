<?php

class Database {
    private $db; // L'objet de la base de donnée

    // Ouverture de la base de donnée
    function __construct() {
      $dsn = 'sqlite:../modele/data/db.db3'; // Data source name
      try {
        $this->db = new PDO($dsn);
        } catch (PDOException $e) {
        exit("Erreur ouverture BD : ".$e->getMessage());
      }
    }

    public function getDb(){
      return $this->db;
    }
<<<<<<< Updated upstream


////////////////////////////////////////
// MUSIQUE
////////////////////////////////////////
=======

>>>>>>> Stashed changes
    public function addMusic($artiste, $titre, $genre){
      $musique = $this->readMusic($artiste, $titre);
      if($musique == NULL){
        try{
          $q = "INSERT INTO Musique VALUES (NULL, '".$artiste."', '".$titre."', '".$genre."')";
<<<<<<< Updated upstream
          $r = $this->db->exec($q);
          if($r == 0) {
            die("insertMusic error: no music inserted\n");
=======
          var_dump($q);
          $r = $this->db->exec($q);
          if($r == 0) {
            die("createNouvelle error: no nouvelle inserted\n");
>>>>>>> Stashed changes
          }
          return $this->readMusic($artiste, $titre);
        } catch (PDOException $e) {
          die("PDO Error :".$e->getMessage());
        }
      }else{
        return $musique;
      }
   }
<<<<<<< Updated upstream

   public function readMusic($artiste, $titre){
     try{
       $q = "SELECT * FROM Musique WHERE artiste = ('$artiste') AND titre = ('$titre')";
       $r = $this->db->query($q)->fetch();
       if($r == 0){
         return null;
       }
       $musique = new Musique();
       $musique->setArtiste($r['Artiste']);
       $musique->setTitre($r['Titre']);
       $musique->setGenre($r['Genre']);
       return $musique;
     }catch (PDOException $e) {
       die("PDO Error :".$e->getMessage());
     }
   }

   public function readMusics(){
     try{
       $q = "SELECT * FROM Musique";
       $r = $this->db->query($q)->fetchAll();
       if($r == 0){
         return null;
       }
       foreach ($r as $key => $value) {
         $musique = new Musique();
         $musique->setArtiste($value['Artiste']);
         $musique->setTitre($value['Titre']);
         $musique->setGenre($value['Genre']);
         $musiques[] = $musique;
       }
       return $musiques;
     }catch (PDOException $e) {
       die("PDO Error :".$e->getMessage());
     }
   }

   public function readIdFromMusic($artiste, $titre){
     try{
       $q = "SELECT IdMusique FROM Musique WHERE artiste = ('$artiste') AND titre = ('$titre')";
       $r = $this->db->query($q)->fetch();
       if($r == 0){
         return null;
       }
       return $r['IdMusique'];
     }catch (PDOException $e) {
       die("PDO Error :".$e->getMessage());
     }
   }

   public function readMusicFromId($idMusique){
     try{
       $q = "SELECT * FROM Musique WHERE IdMusique = ('$idMusique')";
       $r = $this->db->query($q)->fetch();
       if($r == 0){
         return null;
       }
       $musique = new Musique();
       $musique->setTitre($r['Titre']);
       $musique->setArtiste($r['Artiste']);
       $musique->setGenre($r['Genre']);
       return $r['IdMusique'];
     }catch (PDOException $e) {
       die("PDO Error :".$e->getMessage());
     }
   }

////////////////////////////////////////
// UTILISATEUR
////////////////////////////////////////

  public function readUtils(){
    try{
      $q = "SELECT * FROM Utilisateur";
      $r = $this->db->query($q)->fetchAll();
      if($r == 0){
        return null;
      }
      foreach ($r as $key => $value) {
        $utils = $value['Nom'];
      }
      return $utils;
    }catch (PDOException $e) {
      die("PDO Error :".$e->getMessage());
    }
  }

  public function readUtil($nom){
    try{
      $q = "SELECT * FROM Utilisateur where Nom = ".$nom;
      $r = $this->db->query($q)->fetch();
      if($r == 0){
        return null;
      }
      return $r['Nom'];
    }catch (PDOException $e) {
      die("PDO Error :".$e->getMessage());
    }
  }

  public function addUtil($nom){
    $util = $this->readUtil($nom);
    if($musique == NULL){
      try{
        $q = "INSERT INTO Utilisateur VALUES ('".$nom."')";
        $r = $this->db->exec($q);
        if($r == 0) {
          die("insertUtil error: no util inserted\n");
        }
        return $this->readMusic($artiste, $titre);
      } catch (PDOException $e) {
        die("PDO Error :".$e->getMessage());
      }
    }else{
      return $util;
    }
  }


////////////////////////////////////////
// FAVORIS
////////////////////////////////////////

public function addFavoris($nom, $idMusique){
  $musique = $this->readFavoris($nom, $idMusique);
  if($musique == NULL){
    try{
      $q = "INSERT INTO Favoris VALUES (NULL, '".$nom."', '".$IdMusique."')";
      $r = $this->db->exec($q);
      if($r == 0) {
        die("insertFavoris error: no favoris inserted\n");
      }
      return $this->readFavoris($nom, $idMusique);
    } catch (PDOException $e) {
      die("PDO Error :".$e->getMessage());
    }
  }else{
    return $musique;
  }
}

public function readMusic($nom, $idMusique){
 try{
   $q = "SELECT id FROM Musique WHERE Nom = ('$nom') AND IdMusique = ('$idMusique')";
   $r = $this->db->query($q)->fetch();
   if($r == 0){
     return null;
   }
   return $r['IdMusique'];
 }catch (PDOException $e) {
   die("PDO Error :".$e->getMessage());
 }
}

public function readFavoris($nom){
 try{
   $q = "SELECT IdMusique FROM Favoris WHERE Nom = ".$nom;
   $r = $this->db->query($q)->fetchAll();
   if($r == 0){
     return null;
   }
   foreach ($r as $key => $value) {
     $musique = new Musique();
     $musique->setArtiste($value['Artiste']);
     $musique->setTitre($value['Titre']);
     $musique->setGenre($value['Genre']);
     $musiques[] = $musique;
   }
   return $musiques;
 }catch (PDOException $e) {
   die("PDO Error :".$e->getMessage());
 }
}

=======

   public function readMusic($artiste, $titre){
     try{
       $q = "SELECT * FROM Musique WHERE artiste = ('$artiste') AND titre = ('$titre')";
       $r = $this->db->query($q)->fetch();
       if($r == 0){
         return null;
       }
       $musique = new Musique();
       $musique->setArtiste($r['Artiste']);
       $musique->setTitre($r['Titre']);
       $musique->setGenre($r['Genre']);
       return $musique;
     }catch (PDOException $e) {
       die("PDO Error :".$e->getMessage());
     }
   }

   public function readMusics(){
     try{
       $q = "SELECT * FROM Musique";
       $r = $this->db->query($q)->fetchAll();
       if($r == 0){
         return null;
       }
       foreach ($r as $key => $value) {
         $musique = new Musique();
         $musique->setArtiste($value['Artiste']);
         $musique->setTitre($value['Titre']);
         $musique->setGenre($value['Genre']);
         $musiques[] = $musique;
       }
       return $musiques;
     }catch (PDOException $e) {
       die("PDO Error :".$e->getMessage());
     }
   }
>>>>>>> Stashed changes

}







?>
