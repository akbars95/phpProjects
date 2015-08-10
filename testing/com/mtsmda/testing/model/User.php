<?php
include_once "UserAccount.php";
/**
 * Created by JetBrains PhpStorm.
 * User: MTSMDA
 * Date: 09.08.15
 * Time: 22:24
 * To change this template use File | Settings | File Templates.
 */
class User
{

    private $userId;

    private $login;

    private $password;

    public static $USER_ID = "user_id";
    public static $LOGIN = "login";
    public static $PASSWORD = "password";

    private $userAccount;


    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    public function setUserAccount($userAccount)
    {
        $this->userAccount = $userAccount;
    }

    public function getUserAccount()
    {
        return $this->userAccount;
    }


}
