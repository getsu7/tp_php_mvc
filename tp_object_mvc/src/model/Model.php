<?php

class Model
{

    private $db;

    public function __construct()
    {
        $host = 'localhost';
        $user = 'root';
        $pswd = '';
        $dbname = 'social';

        try {

            $this->db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",
                $user, $pswd, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        } catch (Exception $e) {

            var_dump($e->getMessage());

        }
    }

    public function showUser($id)
    {

        try {

            $request = $this->db->prepare('SELECT * FROM user WHERE user_id = ?');
            $request->execute([$id]);

            return $request->fetch();

        } catch(Exception $e) {

            var_dump($e->getMessage());

            return false;
        }
    }

    public function filterUserByName($name)
    {

        try {

            $request = $this->db->prepare('SELECT * FROM user WHERE user_name LIKE ?');
            $request->execute([$name]);

            return $request->fetchAll();

        } catch(Exception $e) {

            var_dump($e->getMessage());

            return false;
        }
    }


    public function addUser($email, $pass, $name, $date, $gender, $hobby) : array
    {
        try {

            $request = $this->db->prepare('INSERT INTO user (  user_email,
                                                                    user_pswd,
                                                                    user_name,
                                                                    user_birth,
                                                                    user_gender,
                                                                    user_hobby)
                                                                    
                                                                    VALUES(?,?,?,?,?,?) ');

            $request->execute([$email, $pass, $name, $date, $gender, $hobby]);

            return array (
                'success' => 'User added successfully',
                'error' => null
            );

        } catch(Exception $e) {

            var_dump($e->getMessage());

            return array (
                'success' => null,
                'error' => 'Your email is already taken or try in a while'
            );
        }
    }

    public function loginUser($email)
    {

        try {

            $request = $this->db->prepare('SELECT * FROM user WHERE user_email = ?');
            $request->execute([$email]);

            return $request->fetch();

        } catch(Exception $e) {

            var_dump($e->getMessage());

            return false;
        }
    }

    public function listUser()
    {

        try {

            $request = $this->db->prepare('SELECT * FROM user');
            $request->execute([]);

            return $request->fetchAll();

        } catch(Exception $e) {

            var_dump($e->getMessage());

            return false;
        }
    }

    public function OrderUserByAge($date)
    {

        try {

            $request = $this->db->prepare('SELECT * FROM user WHERE user_birth > ? ORDER BY user_birth');
            $request->execute([$date]);

            return $request->fetchAll();

        } catch(Exception $e) {

            var_dump($e->getMessage());

            return false;
        }
    }

    public function filterUserByGender($gender, $hobby)
    {

        try {

            $request = $this->db->prepare('SELECT * FROM user WHERE user_gender = ? AND user_hobby = ?');
            $request->execute([$gender, $hobby]);

            return $request->fetchAll();

        } catch(Exception $e) {

            var_dump($e->getMessage());

            return false;
        }
    }


}