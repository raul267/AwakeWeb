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
require_once 'model/comunicaciones.php';
require_once 'model/porCalificaciones.php';
require_once 'model/calificaciones.php';
require_once 'model/departamento.php';
require_once 'model/gastocomun.php';

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
  private $model_comunicacion;
  private $model_porc;
  private $model_ca;
  private $model_de;
  private $model_gc;
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
     $this->model_comunicacion = new Comunicaciones();
     $this->model_porc = new PorCalificaciones();
     $this->model_ca  = new Calificacion();
     $this->model_de = new Departamento();
     $this->model_gc = new Gastocomun();
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
       if ($_SESSION['id'] == null)
        {
          header('Location:index.php');
          exit();
        }
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

      if ($_SESSION['id'] == null)
       {
         header('Location:index.php');
         exit();
       }

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
      if ($_SESSION['id'] == null)
       {
         header('Location:index.php');
         exit();
       }

      $u = new Usuario();
      $r = new Region();
      $c = new Comuna();
      $t = new tipoUsuario();
      $co = new Comunidad();
      require_once 'view/header.php';
      require_once 'view/dashboard2.php';
      require_once 'view/footer.php';
    }

    public function Comunidades()
    {
      if ($_SESSION['id'] == null)
       {
         header('Location:index.php');
         exit();
       }

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
      if ($_SESSION['id'] == null)
       {
         header('Location:index.php');
         exit();
       }

      $u = new Usuario();
      $t = new Tipousuario();
      require_once 'view/header.php';
      require_once 'view/agregarUsuario.php';
      require_once 'view/footer.php';
    }


        public function IngresarDepartamentos()
        {
          if ($_SESSION['id'] == null)
           {
             header('Location:index.php');
             exit();
           }

          $e = new Edificio();
          $d = new Departamento();
          require_once 'view/header.php';
          require_once 'view/agregarDepartamentos.php';
          require_once 'view/footer.php';
        }

    public function IngresarEdificio()
    {
      if ($_SESSION['id'] == null)
       {
         header('Location:index.php');
         exit();
       }

      $e = new Edificio();
      $c = new Comunidad();
      require_once 'view/header.php';
      require_once 'view/agregarEdificio.php';
      require_once 'view/footer.php';
    }

    public function IngresarComunidad()
    {
      if ($_SESSION['id'] == null)
       {
         header('Location:index.php');
         exit();
       }

      $u = new Usuario();
      $r = new Region();
      $c = new Comuna();
      require_once 'view/header.php';
      require_once 'view/agregarComunidad.php';
      require_once 'view/footer.php';
    }

    public function Edificios()
    {
      if ($_SESSION['id'] == null)
       {
         header('Location:index.php');
         exit();
       }

      $e = new Edificio();
      $idAdmin = $_SESSION['id'];  

      require_once 'view/header.php';
      require_once 'view/listarEdificios.php';
      require_once 'view/footer.php';
    }

    public function EdificiosPorComunidad()
    {
      if ($_SESSION['id'] == null)
       {
         header('Location:index.php');
         exit();
       }

      $e = new Edificio();

      require_once 'view/header.php';
      require_once 'view/listarEdificiosComunidad.php';
      require_once 'view/footer.php';
    }

    public function Alarmas()
    {
      if ($_SESSION['id'] == null)
       {
         header('Location:index.php');
         exit();
       }

      $a = new Alarma();

      require_once 'view/header.php';
      require_once 'view/listarAlarmas.php';
      require_once 'view/footer.php';
    }

    public function AgregarAlarma()
    {
      if ($_SESSION['id'] == null)
       {
         header('Location:index.php');
         exit();
       }

      $a = new Alarma();
      $c = new Comunidad();

      require_once 'view/header.php';
      require_once 'view/agregarAlarma.php';
      require_once 'view/footer.php';
    }

    public function Tareas()
    {
      if ($_SESSION['id'] == null)
       {
         header('Location:index.php');
         exit();
       }

        $t = new Tarea();

        require_once 'view/header.php';
        require_once 'view/listarTareas.php';
        require_once 'view/footer.php';
    }

    public function IngresarTareas()
    {
      if ($_SESSION['id'] == null)
       {
         header('Location:index.php');
         exit();
       }

        $t = new Tarea();
        $e = new Edificio();

        require_once 'view/header.php';
        require_once 'view/agregarTarea.php';
        require_once 'view/footer.php';
    }

    public function AsignarConserje()
    {
      if ($_SESSION['id'] == null)
       {
         header('Location:index.php');
         exit();
       }

      $c = new Edificio();
      $co = new Usuario();
      require_once 'view/header.php';
      require_once 'view/asignarConserje.php';
      require_once 'view/footer.php';
    }

    public function ListarConserjes()
    {
      if ($_SESSION['id'] == null)
       {
         header('Location:index.php');
         exit();
       }

      $c = new Edificio();
      $u = new Usuario();

      $c = new Calificacion;
      $us = new Usuario();
      require_once 'view/header.php';
      require_once 'view/listarConserjes.php';
      require_once 'view/footer.php';
    }

    public function ListarDepartamentos()
    {
      if ($_SESSION['id'] == null)
       {
         header('Location:index.php');
         exit();
       }

      $e = new Edificio();
      $d = new Departamento();

      require_once 'view/header.php';
      require_once 'view/listarDepartamentos.php';
      require_once 'view/footer.php';
    }

    public function AgregarComunicacion()
    {
      if ($_SESSION['id'] == null)
       {
         header('Location:index.php');
         exit();
       }

      $e = new Edificio();
      require_once 'view/header.php';
      require_once 'view/agregarComunicacion.php';
      require_once 'view/footer.php';
    }

    public function AsignarUsuariosEdificios()
    {

        if ($_SESSION['id'] == null)
         {
           header('Location:index.php');
           exit();
         }
         $e = new Edificio();
         $d = new Departamento();
         $u = new Usuario();
         $t = new tipoUsuario();

         require_once 'view/header.php';
         require_once 'view/asignarUsuariosEdificios.php';
         require_once 'view/footer.php';

    }

    public function ListarComunicaciones()
    {
      if ($_SESSION['id'] == null)
       {
         header('Location:index.php');
         exit();
       }

      $c = new Comunicaciones();
      require_once 'view/header.php';
      require_once 'view/listarComunicaciones.php';
      require_once 'view/footer.php';
    }

    public function Perfil()
    {
      if ($_SESSION['id'] == null)
       {
         header('Location:index.php');
         exit();
       }

      $c = new Calificacion;
      $u = new Usuario();
      $u = $this->model_us->listarID($_REQUEST['id']);
      $alarmas = $this->model_ca->ListarCaAlarmas($_REQUEST['id']);
      $tareas = $this->model_ca->ListarCaTareas($_REQUEST['id']);
      $usuarios = $this->model_ca->ListarCaUsuarios($_REQUEST['id']);
      $recorridos = $this->model_ca->ListarCaRecorridos($_REQUEST['id']);
      // Porcetanejes
      $porcentajes = $this->model_porc->listarId($u->idEdificio);

      require_once 'view/header.php';
      require_once 'view/perfil.php';
      require_once 'view/footer.php';
    }

    public function MiPerfil()
    {
      if ($_SESSION['id'] == null)
       {
         header('Location:index.php');
         exit();
       }

      $c = new Calificacion;
      $u = $this->model_us->listarID($_SESSION['id']);

      $alarmas = $this->model_ca->ListarCaAlarmas($_SESSION['id']);
      $tareas = $this->model_ca->ListarCaTareas($_SESSION['id']);
      $usuarios = $this->model_ca->ListarCaUsuarios($_SESSION['id']);
      $recorridos = $this->model_ca->ListarCaRecorridos($_SESSION['id']);
      // Porcetanejes
      $porcentajes = $this->model_porc->listarId($u->idEdificio);

      require_once 'view/header.php';
      require_once 'view/MiPerfil.php';
      require_once 'view/footer.php';
    }

    public function AsignarPorcentajes()
    {
      if ($_SESSION['id'] == null)
       {
         header('Location:index.php');
         exit();
       }

      $p = new PorCalificaciones();
      $p = $this->model_porc->listarID($_REQUEST['id']);
      require_once 'view/header.php';
      require_once 'view/asignarPorcentajes.php';
      require_once 'view/footer.php';
    }

    public function VerPorcentajes()
    {
      if ($_SESSION['id'] == null)
       {
         header('Location:index.php');
         exit();
       }

      $p = new PorCalificaciones();
      require_once 'view/header.php';
      require_once 'view/listarPorcentajes.php';
      require_once 'view/footer.php';
    }

    public function ListarUsuariosDepartamentos()
    {
      if ($_SESSION['id'] == null)
       {
         header('Location:index.php');
         exit();
       }
      $e = new Edificio();
      $u = new Usuario;
      require_once 'view/header.php';
      require_once 'view/listarUsuariosDepartamentos.php';
      require_once 'view/footer.php';
    }

    public function ListarEdificio()
    {
      if ($_SESSION['id'] == null)
       {
         header('Location:index.php');
         exit();
       }

      $id= $_REQUEST['id'];
      $e = new Edificio();
      $e = $this->model_edi->ListarID($id);

      require_once 'view/header.php';
      require_once 'view/listarEdificio.php';
      require_once 'view/footer.php';
    }

    public function Propietarios()
    {
      if ($_SESSION['id'] == null)
       {
         header('Location:index.php');
         exit();
       }
       $u = new Usuario();


       require_once 'view/header.php';
       require_once 'view/listarPropietarios.php';
       require_once 'view/footer.php';
    }

    public function RegistrarGastoComun()
    {
      if ($_SESSION['id'] == null)
       {
         header('Location:index.php');
         exit();
       }
       $d = new Departamento();
       $g = new Gastocomun();


       require_once 'view/header.php';
       require_once 'view/agregarGastoComun.php';
       require_once 'view/footer.php';
    }

    public function ListarGastoComun()
    {
      if ($_SESSION['id'] == null)
       {
         header('Location:index.php');
         exit();
       }
       $g = new Gastocomun();


       require_once 'view/header.php';
       require_once 'view/listarGastos.php';
       require_once 'view/footer.php';
    }




    //------------------------------------Metodos

    public function RegistrarUsuarios()
    {

      //creacion usuario
      $u = new Usuario();

      //asigno variables
        $u->tipoUsuario = 4;//$_REQUEST['idTipo'];
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
        $u->idTipo = 4;
        $u->descripcionUsuario = $_REQUEST['descripcionUsuario'];
        $u->estadoUsuario = 1;

         //Insertarlos en la base de datos
         $this->model_us->Insertar($u);

         //redireccionar a otra pagina mostrando un mensaje de exito
        echo '<script language="javascript">alert("Exito al guardar"); window.location.href="index.php?c=Usuario&a=Index";</script>';
    }

    public function AsignarUsuariosDepartamentos()
    {
      if ($_SESSION['id'] == null)
       {
         header('Location:index.php');
         exit();
       }

      //creacion usuario
      $u = new Usuario();
       $u->nombre = $_REQUEST['nombre'];
       $u->rut = $_REQUEST['rut'];
       $u->correo = $_REQUEST['correo'];
       $u->idDepartamento = $_REQUEST['idDepartamento'];
       $u->idTipo = $_REQUEST['idTipo'];

       $this->model_us->AsignarUsuario($u);

       echo '<script language="javascript">alert("Exito al guardar"); window.location.href="index.php?c=Usuario&a=ListarUsuariosDepartamentos";</script>';


    }

    public function RegistrarUsuarios2()
    {
      if ($_SESSION['id'] == null)
       {
         header('Location:index.php');
         exit();
       }

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
        $u->ultimaConexion = $_SESSION['ultimaConexion'];
        $u->idTipo = $_SESSION['idTipo'];
        $u->estadoUsuario = 1;
        $u->descripcionUsuario = $_REQUEST['descripcionUsuario'];
        $u->idUsuario = $_SESSION['id'];
         //Insertarlos en la base de datos
         $this->model_us->InsertarNuevoUsuario($u);

         //redireccionar a otra pagina mostrando un mensaje de exito
        echo '<script language="javascript">alert("Exito al guardar"); window.location.href="index.php?c=Usuario&a=Index";</script>';
    }

    public function RegistrarUsuarioNuevo()
    {
      if ($_SESSION['id'] == null)
       {
         header('Location:index.php');
         exit();
       }

      $u = new Usuario();
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';

      $u->nombre = $_REQUEST['nombre'];
      $u->rut = $_REQUEST['rut'];
      $u->correo = $_REQUEST['correo'];
      $u->idTipo = $_REQUEST['idTipo'];

      $nombre = $_REQUEST['nombre'];
      $correo = $_REQUEST['correo'];
      //clave aleatorea
      for ($i = 0; $i < 7; $i++)
      {
          $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
      $u->password = $randomString;

      $this->model_us->InsertarUsuario($u);

      header("Location:http://tecnoactive.cl/awake/mail.php?clave=$randomString&nombre=$nombre&correo=$correo");


    }


    public function RegistrarComunidad()
    {
      if ($_SESSION['id'] == null)
       {
         header('Location:index.php');
         exit();
       }

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
      if ($_SESSION['id'] == null)
       {
         header('Location:index.php');
         exit();
       }

      $d = new Departamento();
      $e = new Edificio();
      $p = new PorCalificaciones();

// Ingresar Edificio
      $e->idComunidad = $_REQUEST['idComunidad'];
      $e->direccionEdificio = $_REQUEST['direccionEdificio'];
      $e->numeroPisos = $_REQUEST['numeroPisos'];

      $this->model_edi->Insertar($e);

//Ingresar porcentajes
      $idEdificio = $this->model_edi->ListarUltimoEdificio();
      $idEdificio->idEdificio;

     $this->model_porc->Insertar($idEdificio->idEdificio);
      echo '<script language="javascript">alert("Exito al guardar"); window.location.href="index.php?c=Usuario&a=Edificios";</script>';
    }

    public function RegistrarDepartamentos()
    {
      if ($_SESSION['id'] == null)
       {
         header('Location:index.php');
         exit();
       }
       $d = new Departamento();
       $e = new Edificio();

       $idEdificio = $_REQUEST['idEdificio'];
       $cantD = $_REQUEST['cantDepartamentos'];


      for ($i=1; $i <= $cantD ; $i++)
      {
          $d->idEdificio = $_REQUEST['idEdificio'];
          $d->numeroDepartamento = $_REQUEST['numeroDepartamento'.$i];
          $this->model_de->Insertar($d);
      }

  echo '<script language="javascript">alert("Exito al guardar"); window.location.href="index.php?c=Usuario&a=ListarDepartamentos";</script>';
    }

    public function Ingresar()
    {

       date_default_timezone_set('America/Santiago');
      $u = new Usuario();
      $rut = $_REQUEST['rut'];
      $pass = $_REQUEST['pass'];
      $ultimaConexion = date('m/d/Y g:ia');
      $u = $this->model_us->listarRUT($rut);
      if ($rut == $u->rut && $pass == $u->password && $u->estadoUsuario == 1)
      {
        $_SESSION['nombre'] = $u->nombre;
        $_SESSION['id'] = $u->idUsuario;
        $_SESSION['idTipo'] = $u->idTipo;
        $_SESSION['ultimaConexion'] = $u->ultimaConexion;
        $_SESSION['fotoPerfil'] = $u->fotoPerfil;
        $_SESSION['idEdificio'] = $u->idEdificio;
        $this->model_us->ActualizarConeccion($ultimaConexion,$u->idUsuario);
        header('Location: ?c=Usuario&a=Dashboard');

      }

      if ($rut == $u->rut && $pass == $u->password && $u->estadoUsuario == 0)
      {
        $_SESSION['nombre'] = $u->nombre;
        $_SESSION['id'] = $u->idUsuario;
        $_SESSION['rut'] = $u->rut;
        $_SESSION['id'] = $u->idUsuario;
        $_SESSION['correo'] = $u->correo;
        $_SESSION['idTipo'] = $u->idTipo;
        $_SESSION['ultimaConexion'] = $u->ultimaConexion;
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
      if ($_SESSION['id'] == null)
       {
         header('Location:index.php');
         exit();
       }

      $a = new Alarma();
      $a->idComunidad = $_REQUEST['idComunidad'];
      $a->fechaAlarma = $_REQUEST['fechaAlarma'];

      $this->model_al->Insertar($a);
      echo '<script language="javascript">alert("Exito al guardar"); window.location.href="index.php?c=Usuario&a=Alarmas"; </script>';
    }


    public function RegistrarTareas()
    {
      if ($_SESSION['id'] == null)
       {
         header('Location:index.php');
         exit();
       }

      $t = new Tarea();

      $t->idEdificio = $_REQUEST['idEdificio'];
      $t->fechaTarea = $_REQUEST['fechaTarea'];
      $t->descripcionTarea = $_REQUEST['descripcionTarea'];

      $this->model_ta->Insertar($t);
      echo '<script language="javascript">alert("Exito al guardar"); window.location.href="index.php?c=Usuario&a=Tareas"; </script>';
    }

    public function AsignarConserjeEdificio()
    {
      if ($_SESSION['id'] == null)
       {
         header('Location:index.php');
         exit();
       }

      $usuario = $_REQUEST['idUsuario'];
      $edificio = $_REQUEST['idEdificio'];

      $this->model_us->AsignarConserje($edificio,$usuario);
      echo '<script language="javascript">alert("Exito al Asignar Conserje"); window.location.href="index.php?c=Usuario&a=Comunidades"; </script>';
    }

    public function IngresarComunicacion()
    {
      if ($_SESSION['id'] == null)
       {
         header('Location:index.php');
         exit();
       }

      date_default_timezone_set('America/Santiago');

       $descripcion = $_REQUEST['descripcionTarea'];
       $idEdificio = $_REQUEST['idEdificio'];
       $fechaEnviado = date('m/d/Y g:ia');

      $this->model_comunicacion->Insertar($descripcion,$idEdificio,$fechaEnviado);
      echo '<script language="javascript">alert("Comunicacion enviada exitosamente"); window.location.href="index.php?c=Usuario&a=ListarComunicaciones"; </script>';

    }

    public function CambiarPorcentajes()
    {
      if ($_SESSION['id'] == null)
       {
         header('Location:index.php');
         exit();
       }

      $p = new PorCalificaciones();

     $p->porcTareas = $_REQUEST['porcTareas'];
     $p->porcAlarmas = $_REQUEST['porcAlarmas'];
     $p->porcUsuarios = $_REQUEST['porcUsuarios'];
     $p->porcRecorrido = $_REQUEST['porcRecorrido'];
     $p->idEdificio = $_REQUEST['idEdificio'];

      $this->model_porc->Actualizar($p);
      echo '<script language="javascript">alert("Porcentajes cambiados correctamente"); window.location.href="index.php?c=Usuario&a=VerPorcentajes"; </script>';

    }

    public function EliminarComunicacion()
    {
      if ($_SESSION['id'] == null)
       {
         header('Location:index.php');
         exit();
       }

      $id = $_REQUEST['id'];
      $this->model_comunicacion->Delete($id);

    header('Location: ?c=Usuario&a=ListarComunicaciones');
    }

    public function RegistrarGasto()
    {
      if ($_SESSION['id'] == null)
       {
         header('Location:index.php');
         exit();
       }
       $g = new Gastocomun();

        $g->desde = $_REQUEST['desde'];
        $g->hasta = $_REQUEST['hasta'];
        $g->fechaVencimiento = $_REQUEST['fechaVencimiento'];
        $g->monto = $_REQUEST['monto'];
        $g->idDepartamento = $_REQUEST['idDepartamento'];

       $i = $_FILES['imgGasto']['name'];
       $ext = strtolower(pathinfo($i,PATHINFO_EXTENSION));
       $archivo = $_FILES['imgGasto']['tmp_name'];
       $ruta = "assets/img/gastocomun/";
       $ruta = $ruta.$_REQUEST['idDepartamento'].$_REQUEST['fechaVencimiento'].".".$ext;

       move_uploaded_file($archivo, $ruta);
        $g->imgGasto = $ruta;

        $this->model_gc->Insertar($g);
        header('Location: ?c=Usuario&a=ListarGastoComun');

    }
}
 ?>
