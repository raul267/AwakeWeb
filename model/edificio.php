<?php
class edificio
{
  private $conn;
  public $idComunidad;
  public $direccionEdificio;

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

   public function Insertar($e)
   {
     $sql = $this->conn->prepare("INSERT INTO edificio (idComunidad,direccionEdificio) VALUES (?,?)");
     $sql->execute(array($e->idComunidad,$e->direccionEdificio));
   }

   public function Listar()
   {
     $sql = $this->conn->prepare("SELECT * FROM edificio e join comunidad c using(idComunidad)");
     $sql->execute();
     return $sql->fetchAll(PDO::FETCH_OBJ);
   }
   public function ListarEdificiosComunidad($id)
   {
     $sql = $this->conn->prepare("SELECT * FROM edificio e join comunidad c using(idComunidad) where idComunidad =?");
     $sql->execute(array($id));
     return $sql->fetchAll(PDO::FETCH_OBJ);
   }
}

 ?>
