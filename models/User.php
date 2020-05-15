<?php

class User
{
    //properties
    private $db;
    private $user_id;
    private $username;
    private $password;




    function __construct()
    {
        $database = new Database();
        $this->db = $database->getConnection();
    }

    public function addUser($username, $password)
    {
        try {
            $stmt = $this->db->prepare("INSERT INTO users (username, password) 
 VALUES(:username, :password)");

            $stmt->bindParam(":username", $username);
            $stmt->bindParam(":password", $password);

            $stmt->execute();

            return true;

        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return false;
        }
    }



    public function getUser()
    {
        try {
            $stmt = $this->db->prepare("SELECT * FROM users ORDER BY username");
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $result = array();
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $result[] = $row;
                }
            } else {
                $result = "";
            }
            return $result;

        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return "";
        }

    }



    public function setUser($user_id)
    {
        try {
            $stmt = $this->db->prepare("SELECT * FROM users WHERE user_id=:user_id");
            $stmt->execute(array(":user_id" => $user_id));

            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $this->setUserId($result['user_id']);
            $this->setUserName($result['username']);
            $this->setPassword($result['password']);



            return true;

        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return false;
        }
    }

    public function signInUser($username, $password)
    {
        try {
            $stmt = $this->db->prepare("SELECT * FROM users WHERE username = :username AND password = :password LIMIT 1");
            $stmt->bindParam(":username", $username);
            $stmt->bindParam(":password", $password);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                $this->setUserId($result['user_id']);
                return true;
            } else {
                return false;
            }
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return false;
        }

    }


    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    public function getUserId()
    {
        return $this->user_id;
    }

    public function setUserName($username)
    {
        $this->username = $username;
    }

    public function getUserName()
    {
        return $this->username;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getPassword()
    {
        return $this->password;
    }
}