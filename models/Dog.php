<?php

class Dog
{
    public $dog_name;
    public $dog_age;
    public $dog_breed;
    public $dog_gender;
    public $dog_weight;
    public $dog_description;
    private $connection;

    public function __construct($name, $age, $breed, $gender, $weight, $description, $connection)
    {
        $this->dog_name = $name;
        $this->dog_age = $age;
        $this->dog_breed = $breed;
        $this->dog_gender = $gender;
        $this->dog_weight = $weight;
        $this->dog_description = $description;
        $this->connection = $connection;
    }

    public function addDogToDatabase()
    {
        $query = "INSERT INTO `dogs` (`name`, `age`, `breed`, `gender`, `weight`, `description`) VALUES ('$this->dog_name', '$this->dog_age', '$this->dog_breed', '$this->dog_gender', '$this->dog_weight', '$this->dog_description');";
        $result = mysqli_query($this->connection, $query);
        return $result;
    }

    public function deleteDogFromDatabase()
    {
        $query = "DELETE FROM `dogs` WHERE `name` = $this->dog_name";
        $result = mysqli_query($this->connection, $query);
        return $result;
    }
}
