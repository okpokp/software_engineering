<?php

class Staff extends Man
{
    public function __construct($_fname="fnull")
    {
        $this->man = new Man();
        $this->man->setTitle("FF.");
        $this->man->setFname($_fname);
    }

    public function Create($_id, $_room)
    {
        // $room = new Room($id, $room);
        echo "\n\n===== Success =====\nRoom: $_room\nComputer ID: $_id\n\n";
    }

    public function getReport($_report)
    {
        $this->report = $_report;
        echo "\n\n===== Report Log =====\nRoom: ".$this->report->getRoomID()."\nComputer ID: ".$this->report->getComID()."\nStatus: ".$this->report->getStatus()."\n\n";
    }

    public function Fix($_report)
    {
        $this->report = $_report;
        // echo "\n\n===== Report Log =====\nRoom: ".$this->report->getRoomID()."\nComputer ID: ".$this->report->getComID()."\nStatus: ".$this->report->getStatus()."\nStatus: Fix Success\n\n";
        echo "\n\n===== Report Log =====\n".$this->man->getName()."\nRoom: ".$this->report->getRoomID()."\nComputer ID: ".$this->report->getComID()."\nStatus: ".$this->report->getStatus()."\nStatus: Fix Success\n\n";
    }
}
