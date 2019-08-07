<?php
include_once 'Man.php';
include_once 'Student.php';
include_once 'Teacher.php';
include_once 'Staff.php';

include_once 'Computer.php';
include_once 'Room.php';

class Main
{
    public function __construct()
    {









        $c_com = 313;
        $c_room = 10;
        $modcom = $c_com % 10;
        $database = array();









        // $room1 = new Room(1);
        // $room2 = new Room(2);
        // $room3 = new Room(3);
        // $room4 = new Room(4);
        // $room5 = new Room(5);
        // $room6 = new Room(6);
        // $room7 = new Room(7);
        // $room8 = new Room(8);
        // $room9 = new Room(9);
        // $room10 = new Room(10);








        // $man0 = new Man();
        // echo $man0->getName();
        // $man = new Man("Okpokp");
        // echo $man->getName();

        $stu = new Student("Atiwitch");
        echo $stu->man->getName();

        $tea = new Teacher("Adisak");
        echo $tea->man->getName();

        // $sff = new Staff("Koco");
        // $sff = new Staff("Simon");

        // $sff = new Staff("Micheal");
        // echo $sff->man->getName();

        // $stu->Report(79, "404 error", "02");


        // $sff->Create(45, "02");

        // $com = new Computer();

        // ################# Teacher Add Staff ###############################################################
        $sff1 = $tea->AddStaff("Koconut");
        $sff2 = $tea->AddStaff("Simon");
        echo $sff1->man->getName();
        echo $sff2->man->getName();
        // ################# Create Computer ###############################################################
        $count = 1;
        $com_id = 0;
        $room_id = 0;
        // while ($c_com > 1) {
        //     for ($i = 1; $i <= $c_room; $i++) {
        //         $room_id++;
        //         $room = new Room("r$room_id", $sff1->man->getFname());
        //         for ($j = 1; $j <= ($c_com / $c_room); $j++) {
        //             $com_id++;
        //             $c_com -= 1;
        //             $room->AddCom($com_id, $i);
        //             $count++;
        //         }
        //         echo "\n";
        //     }
        // }
        // echo $count;
        for ($i = 1; $i <= 10; $i++) {
            $room_id++;
            $room = new Room("r$room_id", $sff1->man->getFname());
            array_push($database, $room);
            for ($j = 1; $j <= ($c_com / 10); $j++) {
                $com_id++;
                if ($com_id % 2 != 0) {
                    $room->AddCom($com_id, $i, $sff1->man->getName());
                } elseif ($com_id % 2 == 0) {
                    $room->AddCom($com_id, $i, $sff2->man->getName());
                }
                $count = $count + 1;
            }
        }

        if ($count != $modcom + $c_com) {
            for ($i = 1; $i <= $modcom; $i++) {
                $com_id++;
                if ($com_id % 2 != 0) {
                    $room->AddCom($com_id, $i, $sff1->man->getName());
                } elseif ($com_id % 2 == 0) {
                    $room->AddCom($com_id, $i, $sff2->man->getName());
                }
                $count = $count + 1;
            }
        }
        echo "\n==========================================\nTotal Computer: ".($count - 1);
        // ################# Add Officer ###############################################################
        $report01 = $stu->Report(79, "79 error", "02");
        $report02 = $stu->Report(212, "212 error", "05");
        $report03 = $stu->Report(4, "4 error", "07");
        $report04 = $stu->Report(156, "156 error", "09");
        // ################# Officer Get Report ###############################################################
        $sff1->getReport($report02);
        // ################# Officer Fixing ###############################################################
        $sff1->Fix($report04);

        
        // print_r($room->getArray());
    }
}


$main = new Main();
