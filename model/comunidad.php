<?php
class Comunidad
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
      $sql = $this->conn->prepare("SELECT * FROM comunidad");
      $sql->execute();
      return $sql->fetchAll(PDO::FETCH_OBJ);
   }

   public function listarID($id)
   {
      $sql = $this->conn->prepare("SELECT * FROM comunidad join usuario using() where idComuna =?");
      $sql->execute(array($id));
      return $sql->fetch(PDO::FETCH_OBJ);
   }
}

 ?>
