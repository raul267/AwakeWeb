<?php
  class Calificacion
  {
    private $conn;
    public $idUsuario;
    public $idTipoCalificacion;
    public $idUsuarioCalificado;
    public $comentarioCalificacion;
    public $fechaCalificacion;
    public $valorCalificacion;

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
       $sql = $this->conn->prepare("INSERT INTO calificacion(idUsuario,idTipoCalificacion,idUsuarioCalificado,comentarioCalificacion,fechaCalificacion,valorCalificacion) VALUES(?,?,?,?,?,?)");
       $sql->execute(array($c->idUsuario,$c->idTipoCalificacion,$c->idUsuarioCalificado,$c->comentarioCalificacion,$c->fechaCalificacion,$c->valorCalificacion));
     }

     public function Listar()
     {
       $sql = $this->conn->prepare("SELECT * from calificacion join usuario using(idUsuario) join tipocalificacion using(idTipoCalificacion)");
       $sql->execute();
       return $sql->fetchAll(PDO::FETCH_OBJ);
     }

     public function ListarIdEdificio($idEdificio)
     {
       $sql = $this->conn->preapre("SELECT * FROM comunicaciones where idEdificio =?");
       $sql->execute($idEdificio);
       return $sql->fetchAll(PDO::FETCH_OBJ);
     }
    
  }

 ?>
