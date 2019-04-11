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

    public function ListarCaAlarmas($id)
    {
      $sql = $this->conn->prepare("SELECT round(avg(valor) *10) alarma from calificacion where idUsuario = ? and idTipoCalificacion = 1");
      $sql->execute(array($id));
      return $sql->fetch(PDO::FETCH_OBJ);
    }

    public function ListarCaTareas($id)
    {
      $sql = $this->conn->prepare("SELECT round(avg(valor) *10) tarea from calificacion where idUsuario = ? and idTipoCalificacion = 2");
      $sql->execute(array($id));
      return $sql->fetch(PDO::FETCH_OBJ);
    }

    public function ListarCaUsuarios($id)
    {
      $sql = $this->conn->prepare("SELECT round(avg(valor) *10) usuario from calificacion where idUsuario = ? and idTipoCalificacion = 3");
      $sql->execute(array($id));
      return $sql->fetch(PDO::FETCH_OBJ);
    }

    public function ListarCaRecorridos($id)
    {
      $sql = $this->conn->prepare("SELECT round(avg(valor) *10) recorrido from calificacion where idUsuario = ? and idTipoCalificacion = 4");
      $sql->execute(array($id));
      return $sql->fetch(PDO::FETCH_OBJ);
    }

    public function ListarComentarios($id)
    {
      $sql = $this->conn->prepare("SELECT *from calificacion join tipocalificacion using(idTipoCalificacion) join usuario on calificacion.idUsuarioCalificador = usuario.idUsuario where idTipoCalificacion =3 and calificacion.idUsuario = ?");
      $sql->execute(array($id));
      return $sql->fetchAll(PDO::FETCH_OBJ);
    }
  }

 ?>
