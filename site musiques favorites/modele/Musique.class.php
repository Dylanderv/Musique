<?php

class Musique {
    private $artiste;
    private $titre;
    private $genre;

    public function getArtiste(){
      return $this->artiste;
    }

    public function getTitre(){
      return $this->titre;
    }

    public function getGenre(){
      return $this->genre;
    }

    public function setArtiste($artiste){
      $this->artiste = $artiste;
    }

    public function setTitre($titre){
      $this->titre = $titre;
    }

    public function setGenre($genre){
      $this->genre = $genre;
    }

}

?>
