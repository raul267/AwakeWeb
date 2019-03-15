<?php
require_once 'model/usuario.php';
class UsuarioController
{
  private $model_us;

  public function __CONSTRUCT()
   {
     $this->model_us = new Usuario();
   }

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
      require_once 'view/headerLogin.php';
      require_once 'view/registrar.php';
      require_once 'view/footerLogin.php';
    }
}
 ?>
