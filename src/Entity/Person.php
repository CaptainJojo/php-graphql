<?php

namespace App\Entity;

class Person
{
    private $id;

    private $who;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setWho($who)
    {
        $this->who = $who;
    }

    public function getWho()
    {
        return $this->who;
    }
}
