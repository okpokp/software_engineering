<?php

class Computer
{
    private $id = "";
    private $room = "";

    public function __construct($_id = "c00", $_room = "cnulll", $_officer = "onull")
    {
        $this->id = $_id;
        $this->room = $_room;
        echo "Computer ID: $_id\tRoom: $_room\tOfficer: $_officer\n";
    }

    public function setID($id)
    {
        $this->id = $id;
    }

    public function setRoom($room)
    {
        $this->room = $room;
    }

    public function getID()
    {
        return $this->id;
    }

    public function getRoom()
    {
        return $this->room;
    }
}
