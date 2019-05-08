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
     $sql = $this->conn->prepare("INSERT INTO departamento (idEdificio, numeroDepartamento) VALUES (?,?)");
     $sql->execute(array($d->idEdificio, $d->numeroDepartamento));
   }

   public function Listar()
   {
     $sql = $this->conn->prepare("SELECT * from departamento d left join edificio e using(idEdificio) left JOIN  usuario u on d.idDueno = u.idUsuario");
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
