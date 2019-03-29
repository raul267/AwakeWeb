<?php
class Tarea
{
  private $conn;
  public $idUsuario;
  public $idEdificio;
  public $descripcionTarea;
  public $fechaTarea;
  public $estadoTarea;

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
   public function Insertar($t)
   {
     $sql = $this->conn->prepare("INSERT INTO tarea(idUsuario,idEdificio,descripcionTarea,fechaTarea) values(?,?,?,?)");
     $sql->execute(array($t->idUsuario,$t->idEdificio,$t->descripcionTarea,$t->fechaTarea));
   }

   public function listar()
   {
      $sql = $this->conn->prepare("SELECT * FROM TAREA JOIN EDIFICIO using(idEdificio) LEFT JOIN USUARIO USING (idUsuario)");
      $sql->execute();
      return $sql->fetchAll(PDO::FETCH_OBJ);
   }

   public function listarID($id)
   {
      $sql = $this->conn->prepare("SELECT * FROM alarma join usuario using(idUsuario) where idAlarma = ?");
      $sql->execute(array($id));
      return $sql->fetch(PDO::FETCH_OBJ);
   }

   public function listarUsuario($id)
   {
     $sql = $this->conn->prepare("SELECT * FROM alarma join usuario using(idUsuario) where idUsuario = ?");
     $sql->execute(array($id));
   }

}
 ?>
