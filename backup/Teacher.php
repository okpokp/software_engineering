<?php

class Teacher extends Man
{
    public function __construct($_fname="tnull")
    {
        // $this->setName("stu null\n");
        $this->man = new Man();
        $this->man->setTitle("Pr.");
        $this->man->setFname($_fname);
    }

    public function AddStaff($name)
    {
        $this->sff = new Staff($name);
        echo "\n\n===== Success =====\nStaff Name: $name\n\n";
        return $this->sff;
    }
    
    public function Report($id, $status)
    {
        echo "\n\n===== Report =====\n".$this->man->getName()."Computer ID: $id\nStatus: $status\n\n";
    }
}
