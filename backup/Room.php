<?php

class Room
{
    private $id;
    // public $numofcominroom;
    private $officer;
    private $array_computer = array();


    public function __construct($_id = "r00", $_officer = "onull")
    {
        $this->id = $_id;
        // $this->numofcominroom = $numofcominroom;
        $this->officer = $_officer;
    }

    public function getArray()
    {
        return $this->array_computer;
    }

    public function setRoomID($_id)
    {
        $this->id = $_id;
    }

    // public function setnumofcominroom($numofcominroom)
    // {
    //     $this->numofcominroom = $numofcominroom;
    // }

    public function setOfficer($_officer)
    {
        $this->officer = $_officer;
    }
    public function getRoomID()
    {
        return $this->id;
    }

    // public function getnumofcominroom($numofcominroom)
    // {
    //     return $this->numofcominroom;
    // }

    public function getOfficer()
    {
        return $this->officer;
    }

    public function See()
    {
        echo $this->id;
        // echo $this->numofcominroom;
        echo $this->officer;
    }

    public function AddCom($_id, $_room, $_officer)
    {
        array_push($this->array_computer, new Computer($_id, $_room, $_officer));
    }
}
