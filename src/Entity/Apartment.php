<?php

namespace App\Entity;

class Apartment
{
    private $id;

    private $name;

    private $person;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setPerson($person)
    {
        $this->person = $person;
    }

    public function getPerson()
    {
        return $this->person;
    }
}
