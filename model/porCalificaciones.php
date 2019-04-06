<?php
class PorCalificaciones
{
  private $conn;
  public $idEdificio;
  public $porcAlarmas;
  public $porcTareas;
  public $porcUsuarios;
  public $porcRecorrido;

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

   public function Insertar($idEdificio)
   {
     $sql = $this->conn->prepare("INSERT INTO porcalificaciones(idEdificio) VALUES(?)");
     $sql->execute(array($idEdificio));
   }

   public function Actualizar($p)
   {
     $sql = $this->conn->prepare("UPDATE porcalificaciones SET porcAlarmas =?, porcTareas = ?, porcUsuarios =?, porcRecorrido =? WHERE idEdificio =?");
     $sql->execute(array($p->porcAlarmas,$p->porcTareas,$p->porcUsuarios,$p->porcRecorrido,$p->idEdificio));
   }
   public function listar()
   {
      $sql = $this->conn->prepare("SELECT * FROM porcalificaciones JOIN edificio using(idEdificio)");
      $sql->execute();
      return $sql->fetchAll(PDO::FETCH_OBJ);
   }

   public function listarID($id)
   {
      $sql = $this->conn->prepare("SELECT * FROM porcalificaciones JOIN edificio using(idEdificio) where idEdificio = ?");
      $sql->execute(array($id));
      return $sql->fetch(PDO::FETCH_OBJ);
   }
}

 ?>
