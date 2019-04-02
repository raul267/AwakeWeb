<?php
  class ListarComunicaciones
  {
    private $conn;
    public $descripcionComunicacion;
    public $idEdificio;

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

     public function Insertar($descripcion,$idEdificio)
     {
       $sql = $this->conn->prepare("INSERT INTO comunicaciones(descripcionComunicacion,idEdificio) values(?,?)");
       $sql->excetuce(array($descripcion,$idEdificio));
     }

     public function Listar()
     {
       $sql = $this->conn->preapre("SELECT * FROM comunicaciones");
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
