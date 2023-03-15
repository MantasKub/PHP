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
    $users = new Users;

    $user = $users->getRecordsBy([
      'email' => $_POST['email'],
      'password' => $_POST['password']
    ]);

    if (!$user->recordsExists()) {
      $error = [
        'message' => 'Invalid email or password',
        'status' => 'danger'
      ];

      return header('Location: ?page=login&' . http_build_query($error));
    }

    $_SESSION['user_id'] = $user->records[0]['id'];
    $_SESSION['user_name'] = $user->records[0]['username'];

    return header('Location: ?page=/');
  }

  public static function registerIndex()
  {
    include 'views/register.php';
  }

  public static function processRegistration()
  {
    $users = new Users;

    if (
      $users
      ->getRecordsBy([
        'email' => $_POST['email'],
        'username' => $_POST['username']
      ], 'OR')
      ->recordsExists()
    ) {
      $error = [
        'message' => 'This user already exists',
        'status' => 'danger'
      ];

      return header('Location: ?page=register&' . http_build_query($error));
    } else {
      $error = [
        'message' => 'User successfuly registrated',
        'status' => 'success'
      ];

      $users->addRecord($_POST);

      return header('Location: ?page=login&' . http_build_query($error));
    }
  }
}
