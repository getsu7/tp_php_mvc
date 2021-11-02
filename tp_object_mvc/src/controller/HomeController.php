<?php

class HomeController
{
    public function __construct()
    {

    }

    public function manage() {

        if (isset($_GET['state']) && $_GET['state'] === 'logout') {

            $_SESSION = [];
            session_destroy();
        }

        include (__DIR__ . " ./../view/include/header.php");
        include (__DIR__ . " ./../view/include/nav.php");
        include (__DIR__ . "./../view/include/alertBot.php");
        include (__DIR__ . " ./../view/home.php");
        include (__DIR__ . " ./../view/include/footer.php");

    }

}