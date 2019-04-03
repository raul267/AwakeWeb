<?php
  class Comunicaciones
  {
    private $conn;
    public $descripcionComunicacion;
    public $idEdificio;
    public $fechaEnviado;

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

     public function Insertar($descripcion,$idEdificio,$fechaEnviado)
     {
       $sql = $this->conn->prepare("INSERT INTO comunicaciones(descripcionComunicacion,idEdificio,fechaEnviado) values(?,?,?)");
       $sql->execute(array($descripcion,$idEdificio,$fechaEnviado));
     }

     public function Listar()
     {
       $sql = $this->conn->prepare("SELECT * FROM comunicaciones join edificio using(idEdificio)");
       $sql->execute();
       return $sql->fetchAll(PDO::FETCH_OBJ);
     }

     public function ListarIdEdificio($idEdificio)
     {
       $sql = $this->conn->preapre("SELECT * FROM comunicaciones where idEdificio =?");
       $sql->execute($idEdificio);
       return $sql->fetchAll(PDO::FETCH_OBJ);
     }
     public function Delete($id)
           {
             $sql = $this->conn->prepare("DELETE FROM comunicaciones WHERE idComunicacion = ?");
             $sql->execute(array($id));
           }
  }

 ?>
