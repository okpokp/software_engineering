<?php
include_once 'Report.php';

class Man
{
    private $type;
    private $title;
    private $fname;
    private $name;
    
    // ######################################################################################
    public function __construct($_fname="null")
    {
        $this->title = "Mr.";
        $this->fname = $_fname;
    }

    // ######################################################################################
    // public function Man(string $_title, string $_fname)
    // {
    //     $this->name = "Name: $_title $_fname\n";
    // }

    // ######################################################################################
    public function getType()
    {
        return $this->type;
    }
    public function setType($_type)
    {
        $this->type = $_type;
    }

    // ######################################################################################
    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($_title)
    {
        $this->title = $_title;
    }

    // ######################################################################################
    public function getFname()
    {
        return $this->fname;
    }
    public function setFname($_fname)
    {
        $this->fname = $_fname;
    }

    // ######################################################################################
    public function getName()
    {
        $this->name = "Name: ".$this->getTitle()." ".$this->getFname()."\n";
        return $this->name;
    }
    public function setName($_name)
    {
        $this->name = $_name;
    }

    public function Report($_id, $_status, $_room)
    {
        $this->report = new Report($_id, $_status, $_room);
        echo "\n\n===== Report =====\n".$this->getName()."Room: ".$this->report->getRoomID()."\nComputer ID: ".$this->report->getComID()."\nStatus: ".$this->report->getStatus(1)."\n\n";
        return $this->report;
    }
}
