<?php
include_once dirname(__FILE__)."/Connection.php";
include_once "MainDBManipulation.php";
include_once dirname(__FILE__)."/../model/User.php";
/**
 * Created by JetBrains PhpStorm.
 * User: MTSMDA
 * Date: 09.08.15
 * Time: 19:44
 * To change this template use File | Settings | File Templates.
 */
class UserDAO implements MainDBManipulation
{

    public function add($object)
    {


    }

    public function update($id)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function selectAll()
    {
        $resultArrayWithUsers = array();
        $db = Connection::getConnection();
        $rows = $db->query("SELECT * FROM `users`");
        $count = 0;
        while(($row = $rows->fetch(PDO::FETCH_ASSOC))){
            $user = new User();
            $user->setLogin($row[User::$LOGIN]);
            $user->setPassword($row[User::$PASSWORD]);
            $user->setUserId($row[User::$USER_ID]);
            $resultArrayWithUsers[$count] = $user;

            $count++;
        }
        Connection::close();
        return $resultArrayWithUsers;
    }

    public function selectById($id)
    {
        // TODO: Implement selectById() method.
    }
}
