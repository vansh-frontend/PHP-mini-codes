<?php

class vansh{
    public function one(){
        echo "hello vansh";
    }

}

class harry extends vansh{

    public function two(){
        
        $this->one(); //it print both the echo (vansh and harry);

        echo "<br>";
        echo "hello harry";
    }
}
$harry = new harry();
$harry->two();
?>