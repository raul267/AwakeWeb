<?php
class Provincia
{
  public function __CONSTRUCT()
   {
       try
       {
         $this->conn = Database::Conn();
       }
       catch(Exception $e)
       {
         die($e->getMessage());
       }
   }

   public function listar()
   {
      $sql = $this->conn->prepare("SELECT * FROM provincia");
      $sql->execute();
      return $sql->fetchAll(PDO::FETCH_OBJ);
   }

   public function listarID($id)
   {
      $sql = $this->conn->prepare("SELECT * FROM provincia where idProvincia =?");
      $sql->execute($id);
      return $sql->fetch(PDO::FETCH_OBJ);
   }
}

 ?>
