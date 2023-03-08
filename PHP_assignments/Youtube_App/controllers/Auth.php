<?PHP

namespace Controllers;

use \Models\Users;

class Auth
{
  public static function loginIndex()
  {
    include 'views/login.php';
  }

  public static function processLogin()
  {
    print_r($_POST);
  }

  public static function registerIndex()
  {
    include 'views/register.php';
  }

  public static function processRegister()
  {
    $users = new Users;

    $users->addRecord($_POST);
  }
}
