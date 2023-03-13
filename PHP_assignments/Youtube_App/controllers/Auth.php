<?PHP

namespace Controllers;

use \Models\Users;
use \Models\Videos;

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
      'username' => $_POST['password']
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

  //Need to add comments to video with no log in

  public static function checkSession()
  {
    $videos = new Videos;

    if (isset($_SESSION)) {
      $comments = $videos->getRecordsBy([
        'comment_name' => $_POST['comment_name'],
        'comment_comment' => $_POST['comment_comment']
      ]);
    }
  }
}
