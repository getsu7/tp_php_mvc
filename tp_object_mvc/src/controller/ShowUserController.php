<?php

class ShowUserController
{
    public function __construct()
    {
    }

    public function manage() {

        try {
            $model = new Model();
            $user = $model->showUser($_GET['id']);

        } catch (Exception $e) {

            var_dump($e->getMessage());
            $msgError = "User not found";
        }

        include (__DIR__ . " ./../view/include/header.php");
        include (__DIR__ . " ./../view/include/nav.php");
        include (__DIR__ . "./../view/include/alertBot.php");
        include (__DIR__ . " ./../view/showUser.php");
        include (__DIR__ . " ./../view/include/footer.php");

    }

}