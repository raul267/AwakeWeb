<?php
  class Usuario
  {

    private $conn;
    public $rut;
    public $password;
    public $correo;
    public $idEdificio;
    public $direccion;
    public $idComuna;
    public $idRegion;
    public $nacionalidad;
    public $fotoPerfil;
    public $fechaNacimiento;
    public $ultimaConexion;
    public $tipoUsuario;

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

     public function Insertar($us)
     {
       $sql = $this->conn->prepare("INSERT INTO usuario (nombre,rut,password,correo,idEdificio,direccion,idComuna,idRegion,nacionalidad,fotoPerfil,fechaNacimiento,ultimaConexion,tipoUsuario) values(?,?,?,?,?,?,?,?,?,?,?,?,?)");
       $sql->execute(array($us->nombre,$us->rut,$us->password,$us->correo,$us->idEdificio,$us->direccion,$us->idComuna,$us->idRegion,$us->nacionalidad,$us->fotoPerfil,$us->fechaNacimiento,$us->ultimaConexion,$us->tipoUsuario));
     }

     public function listar()
     {
        $sql = $this->conn->prepare("SELECT * FROM usuario join tipousuario using(idTipo)");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_OBJ);
     }

     public function listarID($id)
     {
        $sql = $this->conn->prepare("SELECT * FROM usuario join tipousuario using(idTipo) where idUsuario =?");
        $sql->execute(array($id));
        return $sql->fetch(PDO::FETCH_OBJ);
     }

     public function listarRUT($rut)
     {
        $sql = $this->conn->prepare("SELECT * FROM usuario join tipousuario using(idTipo) where rut =?");
        $sql->execute(array($rut));
        return $sql->fetch(PDO::FETCH_OBJ);
     }

  }
 ?>
