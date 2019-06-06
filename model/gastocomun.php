<?php
  class Gastocomun
  {
    private $conn;
    public $desde;
    public $hasta;
    public $fechaVencimiento;
    public $idDepartamento;
    public $monto;
    public $imgGasto;

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

     public function Insertar($g)
     {
       $sql = $this->conn->prepare("INSERT INTO gastocomun(desde,hasta,fechaVencimiento,idDepartamento,monto,imgGasto) values(?,?,?,?,?,?)");
       $sql->execute(array($g->desde,$g->hasta,$g->fechaVencimiento,$g->idDepartamento,$g->monto,$g->imgGasto));
     }

     public function Listar()
     {
       $sql = $this->conn->prepare("SELECT * FROM gastocomun left join departamento using(idDepartamento)");
       $sql->execute();
       return $sql->fetchAll(PDO::FETCH_OBJ);
     }
     public function ListarID($id)
     {
       $sql = $this->conn->prepare("SELECT * FROM gastocomun join departamento using(idDepartamento)");
       $sql->execute($id);
       return $sql->fetch(PDO::FETCH_OBJ);
     }

 }
?>
