<?php
require_once 'model/usuario.php';
require_once 'model/comuna.php';
require_once 'model/provincia.php';
require_once 'model/region.php';
require_once 'model/tipo.php';
require_once 'model/comunidad.php';
require_once 'model/edificio.php';
require_once 'model/alarma.php';
require_once 'model/tarea.php';
session_start();
class UsuarioController
{
  private $model_us;
  private $model_co;
  private $model_pro;
  private $model_re;
  private $model_ti;
  private $model_com;
  private $model_edi;
  private $model_al;
  private $model_ta;
  public function __CONSTRUCT()
   {
     $this->model_us = new Usuario();
     $this->model_co = new Comuna();
     $this->model_pro = new Provincia();
     $this->model_re = new Region();
     $this->model_ti = new Tipousuario();
     $this->model_com = new Comunidad();
     $this->model_edi = new Edificio();
     $this->model_al = new Alarma();
     $this->model_ta = new Tarea();
   }


//------------------------------------- Metodos de navegacion
   public function Index()
    {
      $u = new Usuario();
      require_once 'view/headerLogin.php';
      require_once 'view/login.php';
      require_once 'view/footerLogin.php';
    }

    public function Usuarios()
     {
       $u = new Usuario();
       require_once 'view/header.php';
       require_once 'view/listarUsuarios.php';
       require_once 'view/footer.php';
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

    public function Registrar2()
    {
      $u = new Usuario();
      $r = new Region();
      $c = new Comuna();
      $t = new tipoUsuario();
      require_once 'view/headerLogin.php';
      require_once 'view/registrar2.php';
      require_once 'view/footerLogin.php';
    }

    public function Dashboard()
    {
      $u = new Usuario();
      $r = new Region();
      $c = new Comuna();
      $t = new tipoUsuario();
      $co = new Comunidad();
      require_once 'view/header.php';
      require_once 'view/dashboard.php';
      require_once 'view/footer.php';
    }

    public function Comunidades()
    {
        $u = new Usuario();
        $r = new Region();
        $c = new Comuna();
        $t = new tipoUsuario();
        $co = new Comunidad();
        require_once 'view/header.php';
        require_once 'view/listarComunidad.php';
        require_once 'view/footer.php';
    }

    public function IngresarUsuarios()
    {
      $u = new Usuario();
      $t = new Tipousuario();
      require_once 'view/header.php';
      require_once 'view/agregarUsuario.php';
      require_once 'view/footer.php';
    }

    public function IngresarEdificio()
    {
      $e = new Edificio();
      $c = new Comunidad();
      require_once 'view/header.php';
      require_once 'view/agregarEdificio.php';
      require_once 'view/footer.php';
    }

    public function IngresarComunidad()
    {
      $u = new Usuario();
      $r = new Region();
      $c = new Comuna();
      require_once 'view/header.php';
      require_once 'view/agregarComunidad.php';
      require_once 'view/footer.php';
    }

    public function Edificios()
    {
      $e = new Edificio();

      require_once 'view/header.php';
      require_once 'view/listarEdificios.php';
      require_once 'view/footer.php';
    }

    public function EdificiosPorComunidad()
    {
      $e = new Edificio();

      require_once 'view/header.php';
      require_once 'view/listarEdificiosComunidad.php';
      require_once 'view/footer.php';
    }

    public function Alarmas()
    {
      $a = new Alarma();

      require_once 'view/header.php';
      require_once 'view/listarAlarmas.php';
      require_once 'view/footer.php';
    }

    public function AgregarAlarma()
    {
      $a = new Alarma();
      $c = new Comunidad();

      require_once 'view/header.php';
      require_once 'view/agregarAlarma.php';
      require_once 'view/footer.php';
    }

    public function Tareas()
    {
        $t = new Tarea();

        require_once 'view/header.php';
        require_once 'view/listarTareas.php';
        require_once 'view/footer.php';
    }

    public function IngresarTareas()
    {
        $t = new Tarea();
        $e = new Edificio();

        require_once 'view/header.php';
        require_once 'view/agregarTarea.php';
        require_once 'view/footer.php';
    }

    public function AsignarConserje()
    {
      $c = new Edificio();
      $co = new Usuario();
      require_once 'view/header.php';
      require_once 'view/asignarConserje.php';
      require_once 'view/footer.php';
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
        $u->telefonoUsuario = $_REQUEST['telefonoUsuario'];
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
        $u->idTipo = $_REQUEST['idTipo'];
        $u->descripcionUsuario = $_REQUEST['descripcionUsuario'];
        $u->estadoUsuario = 1;

         //Insertarlos en la base de datos
         $this->model_us->Insertar($u);

         //redireccionar a otra pagina mostrando un mensaje de exito
        echo '<script language="javascript">alert("Exito al guardar"); window.location.href="index.php?c=Usuario&a=Index";</script>';
    }
    public function RegistrarUsuarios2()
    {
      //creacion usuario
      $u = new Usuario();

      //asigno variables
        $u->nombre = $_REQUEST['nombre'];
        $u->rut = $_REQUEST['rut'];
        $u->password = $_REQUEST['password'];
        $u->correo = $_REQUEST['correo'];
        $u->direccion = $_REQUEST['direccion'];
        $u->telefonoUsuario = $_REQUEST['telefonoUsuario'];
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
        $u->estadoUsuario = 1;
        $u->descripcionUsuario = $_REQUEST['descripcionUsuario'];

         //Insertarlos en la base de datos
         $this->model_us->InsertarNuevoUsuario($u,$_SESSION['id']);

         //redireccionar a otra pagina mostrando un mensaje de exito
        echo '<script language="javascript">alert("Exito al guardar"); window.location.href="index.php?c=Usuario&a=Index";</script>';
    }

    public function RegistrarUsuarioNuevo()
    {
      $u = new Usuario();
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';

      $u->nombre = $_REQUEST['nombre'];
      $u->rut = $_REQUEST['rut'];
      $u->correo = $_REQUEST['correo'];
      $u->idTipo = $_REQUEST['idTipo'];

      //clave aleatorea
      for ($i = 0; $i < 7; $i++)
      {
          $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
      $u->password = $randomString;

      $this->model_us->Insertar($u);
      echo '<script language="javascript">alert("Exito al guardar"); window.location.href="index.php?c=Usuario&a=Usuarios";</script>';
    }

    public function RegistrarComunidad()
    {
      $c = new Comunidad();

      // Asignar atributos a comunidad
      $c->idAdmin = $_REQUEST['idAdmin'];
      $c->nombreComunidad = $_REQUEST['nombreComunidad'];
      $c->idRegion = $_REQUEST['idRegion'];
      $c->idComuna = $_REQUEST['idComuna'];
      $c->direccionComunidad = $_REQUEST['direccionComunidad'];

      //Registrar comunidad
      $this->model_com->Insertar($c);
      echo '<script language="javascript">alert("Exito al guardar"); window.location.href="index.php?c=Usuario&a=Dashboard";</script>';
    }

    public function RegistrarEdificio()
    {
      $e = new Edificio();

      $e->idComunidad = $_REQUEST['idComunidad'];
      $e->direccionEdificio = $_REQUEST['direccionEdificio'];

      $this->model_edi->Insertar($e);
        echo '<script language="javascript">alert("Exito al guardar"); window.location.href="index.php?c=Usuario&a=Edificios";</script>';
    }

    public function Ingresar()
    {
       date_default_timezone_set('America/Santiago');
      $u = new Usuario();
      $rut= $_REQUEST['rut'];
      $pass = $_REQUEST['pass'];
      $ultimaConexion = date('m/d/Y g:ia');
      $u = $this->model_us->listarRUT($rut);
      if ($rut == $u->rut && $pass == $u->password && $u->estadoUsuario == 1)
      {
        $_SESSION['nombre'] = $u->nombre;
        $_SESSION['id'] = $u->idUsuario;
        $_SESSION['tipoUsuario'] = $u->tipoUsuario;
        $_SESSION['ultimaConexion'] = $u->ultimaConexion;
        $_SESSION['fotoPerfil'] = $u->fotoPerfil;
        $this->model_us->ActualizarConeccion($ultimaConexion,$u->idUsuario);
        header('Location: ?c=Usuario&a=Dashboard');

      }

      if ($rut == $u->rut && $pass == $u->password && $u->estadoUsuario == 0)
      {
        $_SESSION['nombre'] = $u->nombre;
        $_SESSION['id'] = $u->idUsuario;
        $_SESSION['rut'] = $u->rut;
        $_SESSION['correo'] = $u->correo;
        header('Location: ?c=Usuario&a=Registrar2');

      }
      else
      {
        echo '<script language="javascript">alert("Error al ingresar"); window.location.href="index.php?c=Usuario&a=Index"; </script>';
      }
    }

    public function logOut()
    {
      session_destroy();
      header('Location:index.php');
    }


    //Metodo para generar contraseña aleatorea
    public function claveRandom($length)
    {
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);
      $randomString = '';

      for ($i = 0; $i < $length; $i++)
      {
          $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
      return $randomString;
    }

    public function IngresarAlarma()
    {
      $a = new Alarma();
      $a->idComunidad = $_REQUEST['idComunidad'];
      $a->fechaAlarma = $_REQUEST['fechaAlarma'];

      $this->model_al->Insertar($a);
      echo '<script language="javascript">alert("Exito al guardar"); window.location.href="index.php?c=Usuario&a=Alarmas"; </script>';
    }


    public function RegistrarTareas()
    {
      $t = new Tarea();

      $t->idEdificio = $_REQUEST['idEdificio'];
      $t->fechaTarea = $_REQUEST['fechaTarea'];
      $t->descripcionTarea = $_REQUEST['descripcionTarea'];

      $this->model_ta->Insertar($t);
      echo '<script language="javascript">alert("Exito al guardar"); window.location.href="index.php?c=Usuario&a=Tareas"; </script>';
    }

    public function AsignarConserjeEdificio()
    {
      $usuario = $_REQUEST['idUsuario'];
      $edificio = $_REQUEST['idEdificio'];

      $this->model_us->AsignarConserje($edificio,$usuario);
      echo '<script language="javascript">alert("Exito al Asignar Conserje"); window.location.href="index.php?c=Usuario&a=Tareas"; </script>';


    }
}
 ?>
