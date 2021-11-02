<?php

class ListUserController
{
    private $model;

    public function __construct()
    {
        $this->model = new Model();
    }

    public function manage() {

        try {

                $users = $this->model->listUser();


                if (isset($_POST['filter_gender'], $_POST['filter_hobby']) &&
                         ($_POST['filter_gender'] !== 'none' || $_POST['filter_hobby'] !== 'none')) {

                        $users = $this->model->filterUserByGender(  $_POST['filter_gender'],
                                                                    $_POST['filter_hobby'],
                        );
                }

                if (isset($_POST['filter_date']) && (!empty($_POST['filter_date']))) {

                    $users = $this->model->OrderUserByAge($_POST['filter_date']);

                }


                if ($users === false) {

                    $msgError = 'Something happen wrong, please try in a while';

                }

                if (isset($_POST['search'])) {

                    $users = $this->model->filterUserByName($_POST['search']);

                }

        } catch (Exception $e) {

            var_dump($e->getMessage());

        }

        include (__DIR__ . " ./../view/include/header.php");
        include (__DIR__ . " ./../view/include/nav.php");
        include (__DIR__ . "./../view/include/alertBot.php");
        include (__DIR__ . " ./../view/listUser.php");
        include (__DIR__ . " ./../view/include/footer.php");

    }
}