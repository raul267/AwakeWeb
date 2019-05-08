<?php
class departamento
{
  private $conn;
  public $idEdificio;
  public $idDueno;
  public $numeroDepartamento;

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

   public function Insertar($d)
   {
     $sql = $this->conn->prepare("INSERT INTO departamento (idEdificio, idDueno, numeroDepartamento) VALUES (?,?,3)");
     $sql->execute(array($d->idEdificio, $d->idDueno, $d->numeroDepartamento));
   }

   public function Listar()
   {
     $sql = $this->conn->prepare("SELECT * from departamento d join edificio using(idEdificio)");
     $sql->execute();
     return $sql->fetchAll(PDO::FETCH_OBJ);
   }
   public function ListarID($id)
   {
     $sql = $this->conn->prepare("SELECT * from departamento d join edificio using(idEdificio) where idDepartamento = ?");
     $sql->execute($id);
     return $sql->fetch(PDO::FETCH_OBJ);
   }

}

 ?>
