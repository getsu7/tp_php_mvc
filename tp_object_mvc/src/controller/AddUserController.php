<?php

class AddUserController
{
    public function __construct()
    {

    }

    public function manage() {

        if ( isset( $_POST['email'],
                    $_POST['pswd'],
                    $_POST['name'],
                    $_POST['date'],
                    $_POST['gender'],
                    $_POST['hobby'])) {

            if (!empty($_POST['email']) ||
                !empty($_POST['pswd'])  ||
                !empty($_POST['name'])  ||
                !empty($_POST['date'])  ||
                !empty($_POST['gender'])||
                !empty($_POST['hobby'])) {

                $model = new Model();
                $addUser = $model->addUser($_POST['email'],
                                $_POST['pswd'],
                                $_POST['name'],
                                $_POST['date'],
                                $_POST['gender'],
                                $_POST['hobby']);

                $msgSuccess = $addUser['success'];
                $msgError = $addUser['error'];

            } else {

                $msgError = 'Please fill in all the fields..';

            }

        }

        include (__DIR__ . " ./../view/include/header.php");
        include (__DIR__ . " ./../view/include/nav.php");
        include (__DIR__ . "./../view/include/alertBot.php");
        include (__DIR__ . " ./../view/addUser.php");
        include (__DIR__ . " ./../view/include/footer.php");
    }

}