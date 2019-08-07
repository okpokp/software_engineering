<?php

class Student extends Man
{
    // private $man;
    public function __construct($_fname="snull")
    {
        #1
        // $this->man = new Man();
        // $this->man->setName("stu null\n");
        #2
        // $this->setName("stu null\n");
        #3
        $this->man = new Man();
        $this->man->setTitle("St.");
        $this->man->setFname($_fname);
    }

    // public function setName(string $_name)
    // {
    //     $this->man->setName($_name);
    // }

    // public function getName()
    // {
    //     return $this->man->getName();
    // }
}
