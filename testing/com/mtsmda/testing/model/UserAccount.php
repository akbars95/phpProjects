<?php
include_once "User.php";
/**
 * Created by JetBrains PhpStorm.
 * User: MTSMDA
 * Date: 09.08.15
 * Time: 22:26
 * To change this template use File | Settings | File Templates.
 */
class UserAccount
{

    private $userId;
    private $firstName;
    private $lastName;
    private $middleName;
    private $dateOfBirth;
    private $gender;
    private $createAccountDate;
    private $lastUpdateAccountDate;

    private $user;


    public function setCreateAccountDate($createAccountDate)
    {
        $this->createAccountDate = $createAccountDate;
    }

    public function getCreateAccountDate()
    {
        return $this->createAccountDate;
    }

    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastUpdateAccountDate($lastUpdateAccountDate)
    {
        $this->lastUpdateAccountDate = $lastUpdateAccountDate;
    }

    public function getLastUpdateAccountDate()
    {
        return $this->lastUpdateAccountDate;
    }

    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;
    }

    public function getMiddleName()
    {
        return $this->middleName;
    }

    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }

    public function getUser()
    {
        return $this->user;
    }


}
