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
    public $idTipo;
    public $telefonoUsuario;

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
       $sql = $this->conn->prepare("INSERT INTO usuario (nombre,rut,password,correo,idEdificio,direccion,idComuna,idRegion,nacionalidad,fotoPerfil,fechaNacimiento,ultimaConexion,idTipo,telefonoUsuario) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
       $sql->execute(array($us->nombre,$us->rut,$us->password,$us->correo,$us->idEdificio,$us->direccion,$us->idComuna,$us->idRegion,$us->nacionalidad,$us->fotoPerfil,$us->fechaNacimiento,$us->ultimaConexion,$us->idTipo,$us->telefonoUsuario));
     }

     public function InsertarNuevoUsuario($us,$id)
     {
      $sql = $this->conn->prepare("UPDATE `usuario` SET`nombre`=?,`rut`=?,`password`=?,`correo`=?,`idEdificio`=?,`direccion`=?,`idComuna`=?,`idRegion`=?,`Nacionalidad`=?,`fotoPerfil`=?,`fechaNacimiento`=?,`telefonoUsuario`=?,`estadoUsuario` =? WHERE idUsuario = ?");
      $sql->execute(array($us->nombre,$us->rut,$us->password,$us->correo,$us->idEdificio,$us->direccion,$us->idComuna,$us->idRegion,$us->nacionalidad,$us->fotoPerfil,$us->fechaNacimiento,$us->telefonoUsuario,$us->estadoUsuario,$id));
     }

     public function listar()
     {
        $sql = $this->conn->prepare("SELECT * FROM usuario join tipoUsuario using(idTipo)");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_OBJ);
     }

     public function listarID($id)
     {
        $sql = $this->conn->prepare("SELECT * FROM usuario join tipousuario using(idTipo) where idUsuario =?");
        $sql->execute(array($id));
        return $sql->fetch(PDO::FETCH_OBJ);
     }

     public function listarAdmin()
     {
       $sql = $this->conn->prepare("SELECT * FROM usuario where idTipo = 1");
       $sql->execute();
       return $sql->fetchAll(PDO::FETCH_OBJ);
     }

     public function listarRUT($rut)
     {
        $sql = $this->conn->prepare("SELECT * FROM usuario join tipousuario using(idTipo) where rut =?");
        $sql->execute(array($rut));
        return $sql->fetch(PDO::FETCH_OBJ);
     }

     public function ActualizarConeccion($ultimaConexion,$id)
     {
       $sql = $this->conn->prepare("UPDATE `usuario` SET `ultimaConexion`=? WHERE idUsuario = ?");
       $sql->execute(array($ultimaConexion,$id));
     }

  }
 ?>
