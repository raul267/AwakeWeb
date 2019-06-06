<?php
class Comuna
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
      $sql = $this->conn->prepare("SELECT * FROM comuna");
      $sql->execute();
      return $sql->fetchAll(PDO::FETCH_OBJ);
   }

   public function listarID($id)
   {
      $sql = $this->conn->prepare("SELECT * FROM comuna where idComuna =?");
      $sql->execute($id);
      return $sql->fetch(PDO::FETCH_OBJ);
   }
}

 ?>
