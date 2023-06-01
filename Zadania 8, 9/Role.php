<?php

class Role
{
    private $id;
    private $role;

    /**
     * @param $id
     * @param $role
     */
    public function __construct($id, $role)
    {
        $this->id = $id;
        $this->role = $role;
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
    public function getRole()
    {
        return $this->role;
    }
}