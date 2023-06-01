<?php

class Car
{
    private $id;
    private $userId;
    private $make;
    private $model;
    private $price;
    private $year;
    private $description;

    /**
     * @param $id
     * @param $userId
     * @param $make
     * @param $model
     * @param $price
     * @param $year
     * @param $description
     */
    public function __construct($id, $userId, $make, $model, $price, $year, $description)
    {
        $this->id = $id;
        $this->userId = $userId;
        $this->make = $make;
        $this->model = $model;
        $this->price = $price;
        $this->year = $year;
        $this->description = $description;
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
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @return mixed
     */
    public function getMake()
    {
        return $this->make;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }
}