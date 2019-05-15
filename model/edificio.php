<?php
class edificio
{
  private $conn;
  public $idComunidad;
  public $direccionEdificio;
  public $numeroPisos;

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
     $sql = $this->conn->prepare("INSERT INTO edificio (idComunidad,direccionEdificio,numeroPisos) VALUES (?,?,?)");
     $sql->execute(array($e->idComunidad,$e->direccionEdificio,$e->numeroPisos));
   }

   public function Listar()
   {
     $sql = $this->conn->prepare("SELECT * FROM edificio e join comunidad c using(idComunidad)");
     $sql->execute();
     return $sql->fetchAll(PDO::FETCH_OBJ);
   }

   public function ListarID($id)
   {
     $sql = $this->conn->prepare("SELECT * FROM edificio e join comunidad c using(idComunidad) where idEdificio = ?");
     $sql->execute(array($id));
     return $sql->fetch(PDO::FETCH_OBJ);
   }
   public function ListarUltimoEdificio()
   {
     $sql = $this->conn->prepare("SELECT max(idEdificio) idEdificio FROM edificio");
     $sql->execute();
     return $sql->fetch(PDO::FETCH_OBJ);
   }
   public function ListarEdificiosComunidad($id)
   {
     $sql = $this->conn->prepare("SELECT * FROM edificio e join comunidad c using(idComunidad) where idComunidad =?");
     $sql->execute(array($id));
     return $sql->fetchAll(PDO::FETCH_OBJ);
   }
}

 ?>
