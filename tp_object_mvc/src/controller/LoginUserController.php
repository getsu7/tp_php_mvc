<?php



class LoginUserController
{
    public function __construct()
    {

    }

    public function manage() {

        if (isset($_POST['email'], $_POST['pswd'])) {

            if (!empty($_POST['email']) || !empty($_POST['pswd'])) {

                $model = new Model();
                $login = $model->loginUser($_POST['email']);

                if ($login['user_pswd'] === $_POST['pswd']) {

                    $msgSuccess = "Welcome back {$login['user_name']}, you have been login";

                    $_SESSION['user'] = [];

                    array_push($_SESSION['user'], $login['user_name']);

                } else {

                    $msgError = 'This account does\'t exist or try in a while';

                }

            } else {

                $msgError = 'Please fill in all the fields';
            }
        }

        include (__DIR__ . " ./../view/include/header.php");
        include (__DIR__ . " ./../view/include/nav.php");
        include (__DIR__ . "./../view/include/alertBot.php");
        include (__DIR__ . " ./../view/loginUser.php");
        include (__DIR__ . " ./../view/include/footer.php");

    }
}