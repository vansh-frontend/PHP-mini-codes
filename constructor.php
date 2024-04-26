<?php

class vansh{
    public $name;
    public $id;
    private $pass;


    public function __construct($name,$id,$pass)
    {
        $this->name = $name;
        $this->id = $id;
        $this->pass = $pass;
    }

    public function display(){
        echo "user information \n";
        echo "<br>";
        echo "Name : ". $this->name;
        echo "<br>";
        echo "id:" .$this->id;
        echo "<br>";
        echo "Pass : ". $this->pass;
        
}
    protected function getpass(){
        return $this->pass;
    }

}
$vansh1 = new vansh("vansh",'10001','12244');

$vansh1->display();

// echo "password: " . $vansh1->display();
?>