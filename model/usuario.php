<?php
  class Usuario
  {

    private $conn;
    private $nombre;
    private $rut;
    private $password;
    private $correo;
    private $idComunidad;
    private $direccion;
    private $idComuna;
    private $idRegion;
    private $nacionalidad;
    private $fotoPerfil;
    private $fechaNacimiento;
    private $ultimaConexion;
    private $tipoUsuario;

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
       $sql = $this->conn->prepare("INSERT INTO usuario (nombre,rut,password,correo,idComunidad,direccion,idComuna,idRegion,nacionalidad,fotoPerfil,fechaNacimiento,ultimaConexion,tipoUsuario) values(?,?,?,?,?,?,?,?,?,?,?,?,?)");
       $sql->execute(array($us->nombre,$us->rut,$us->password,$us->correo,$us->idComunidad,$us->direccion,$us->idComuna,$us->idRegion,$us->nacionalidad,$us->fotoPerfil,$us->fechaNacimiento,$us->ultimaConexion,$us->tipoUsuario));
     }

     public function listar()
     {
        $sql = $this->conn->prepare("SELECT * FROM usuario");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_OBJ);
     }

     public function listarID($id)
     {
        $sql = $this->conn->prepare("SELECT * FROM usuario where idUsuario =?");
        $sql->execute($id);
        return $sql->fetch(PDO::FETCH_OBJ);
     }

  }
 ?>
