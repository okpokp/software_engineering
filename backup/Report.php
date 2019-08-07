<?php

class Report
{
    private $id;
    private $room;
    // private $symptom;
    private $status;
    private $array = array();


    public function __construct($_id = "re00", $_status = "Fixing", $_room = "r00")
    {
        $this->id = $_id;
        // $this->symptom = $symptom;
        $this->room = $_room;
        $this->status = $_status;
    }

    public function setComID($_id)
    {
        $this->id = $_id;
    }

    // public function setsympton($symptom)
    // {
    //     $this->symptom = $symptom;
    // }

    public function setRoomID($_id)
    {
        $this->room = $_id;
    }

    public function setStatus($_status)
    {
        $this->status = $_status;
    }


    public function getComID()
    {
        return $this->id;
    }

    // public function getsympton()
    // {
    //     return $this->symptom;
    // }

    public function getRoomID()
    {
        return $this->room;
    }


    public function getStatus()
    {
        return $this->status;
    }

    public function see()
    {
        echo $this->id;
        // echo $this->symptom;
        echo $this->status;
    }
}
