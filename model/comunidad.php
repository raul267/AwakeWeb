<?php
class Comunidad
{
  private $conn;
  public $idAdmin;
  public $nombreComunidad;
  public $direccionComunidad;
  public $idRegion;
  public $idComuna;
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

   public function Insertar($c)
   {
     $sql = $this->conn->prepare("INSERT INTO comunidad (idAdmin,nombreComunidad,direccionComunidad,idRegion,idComuna) VALUES (?,?,?,?,?)");
     $sql->execute(array($c->idAdmin,$c->nombreComunidad,$c->direccionComunidad,$c->idRegion,$c->idComuna));
   }

   public function listar()
   {
      $sql = $this->conn->prepare("SELECT * FROM comunidad c join usuario u on c.idAdmin = u.idUsuario");
      $sql->execute();
      return $sql->fetchAll(PDO::FETCH_OBJ);
   }

   public function listarAdministrador($id)
   {
      $sql = $this->conn->prepare("SELECT * FROM comunidad c join usuario u on c.idAdmin = u.idUsuario where idUsuario = ?");
      $sql->execute(array($id));
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
