<?php
class Alarma
{
  private $conn;
  public $idComunidad;
  public $fechaAlarma;
  public $tiempoAlarma;
  public $estadoAlarma;
  public $idUsuario;

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
   public function Insertar($a)
   {
     $sql = $this->conn->prepare("INSERT INTO alarma(idComunidad,fechaAlarma) values(?,?)");
     $sql->execute(array($a->idComunidad,$a->fechaAlarma));
   }

   public function listar()
   {
      $sql = $this->conn->prepare("SELECT * FROM alarma left join usuario using(idUsuario) join comunidad using(idComunidad)");
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
