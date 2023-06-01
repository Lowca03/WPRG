<?php

class User
{
    private $id;
    private $login;
    private $password;
    private $roleId;

    public function __construct($id, $login, $password, $roleId)
    {
        $this->id;
        $this->login;
        $this->password;
        $this->roleId;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getRoleId()
    {
        return $this->roleId;
    }
}