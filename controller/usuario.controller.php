<?php
require_once 'model/usuario.php';
require_once 'model/comuna.php';
require_once 'model/provincia.php';
require_once 'model/region.php';
require_once 'model/tipo.php';
class UsuarioController
{
  private $model_us;
  private $model_co;
  private $model_pro;
  private $model_re;
  private $model_ti;

  public function __CONSTRUCT()
   {
     $this->model_us = new Usuario();
     $this->model_co = new Comuna();
     $this->model_pro = new Provincia();
     $this->model_re = new Region();
     $this->model_ti = new Tipousuario();
   }

//------------------------------------- Metodos de navegacion
   public function Index()
    {
      $u = new Usuario();
      require_once 'view/headerLogin.php';
      require_once 'view/login.php';
      require_once 'view/footerLogin.php';
    }

    public function Registrar()
    {
      $u = new Usuario();
      $r = new Region();
      $c = new Comuna();
      $t = new tipoUsuario();
      require_once 'view/headerLogin.php';
      require_once 'view/registrar.php';
      require_once 'view/footerLogin.php';
    }

    //------------------------------------Metodos

    public function RegistrarUsuarios()
    {
      //creacion usuario
      $u = new Usuario();

      //asigno variables
        $u->tipoUsuario = $_REQUEST['idTipo'];
        $u->nombre = $_REQUEST['nombre'];
        $u->rut = $_REQUEST['rut'];
        $u->password = $_REQUEST['password'];
        $u->correo = $_REQUEST['correo'];
        $u->direccion = $_REQUEST['direccion'];
        $u->idComuna = $_REQUEST['idComuna'];
        $u->idRegion = $_REQUEST['idRegion'];
        $u->nacionalidad = $_REQUEST['nacionalidad'];
      // Foto perfil
       $i = $_FILES['fotoPerfil']['name'];
       $ext = strtolower(pathinfo($i,PATHINFO_EXTENSION));
       $archivo = $_FILES['fotoPerfil']['tmp_name'];
       $ruta = "assets/img/perfil/";
       $ruta = $ruta.$_REQUEST['rut'].".".$ext;

       move_uploaded_file($archivo, $ruta);
        $u->fotoPerfil = $ruta;
         $u->fechaNacimiento = $_REQUEST['fechaNacimiento'];

         //Insertarlos en la base de datos
         $this->model_us->Insertar($u);

         //redireccionar a otra pagina mostrando un mensaje de exito
        echo '<script language="javascript">alert("Exito al guardar"); window.location.href="index.php?c=Usuario&a=Index";</script>';
    }

    public function Ingresar()
    {
      $u = new Usuario();
      $rut= $_REQUEST['rut'];
      $pass = $_REQUEST['pass'];
      $u = $this->model_us->listarRUT($rut);
      if ($rut == $u->rut && $ass == $u->password)
      {
        header('Location: ?c=Usuario&a=Dashboard');
      }
      else
      {
        echo '<script language="javascript">alert("Error al ingresar"); window.location.href="index.php?c=Usuario&a=Index";</script>';
      }
    }

}
 ?>
