<?php
class Tipousuario
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
      $sql = $this->conn->prepare("SELECT * FROM tipousuario");
      $sql->execute();
      return $sql->fetchAll(PDO::FETCH_OBJ);
   }

   public function ListarUsuariosDepartamentos()
   {
      $sql = $this->conn->prepare("SELECT * from tipousuario WHERE idTipo = 3 || idTipo = 4 || idTipo = 5;");
      $sql->execute();
      return $sql->fetchAll(PDO::FETCH_OBJ);
   }

   public function listarID($id)
   {
      $sql = $this->conn->prepare("SELECT * FROM tipousuario where idtipo =?");
      $sql->execute($id);
      return $sql->fetch(PDO::FETCH_OBJ);
   }
}

 ?>
