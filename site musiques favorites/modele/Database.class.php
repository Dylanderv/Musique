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

    public function addMusic($artiste, $titre, $genre){
      $musique = $this->readMusic($artiste, $titre);
      if($musique == NULL){
        try{
          $q = "INSERT INTO Musique VALUES (NULL, '".$artiste."', '".$titre."', '".$genre."')";
          var_dump($q);
          $r = $this->db->exec($q);
          if($r == 0) {
            die("createNouvelle error: no nouvelle inserted\n");
          }
          return $this->readMusic($artiste, $titre);
        } catch (PDOException $e) {
          die("PDO Error :".$e->getMessage());
        }
      }else{
        return $musique;
      }
   }

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

}







?>
