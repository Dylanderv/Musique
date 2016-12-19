<?php

  class Database{

    private $db;

    public __construct() {

      try{
        $this->db = new PDO("sqlite: ../class/data/db.db3");
      } catch(PDOException $e){
        echo 'ERROR: ' . $e->getMessage();
      }

    }

    public function getDb(){
      return $this->db;
    }

}







?>
