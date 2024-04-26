<?php 

class vansh{
    public static function one(){
        echo "this is my first static function program in php";
        echo "<br>";
    }

    private static function two(){
        echo "cant show this program";
    }

    public static function accessPrivate(){
        self::two();     //self keyword
    }
}



// static function ko call
vansh::one();


// privates class inherit's vansh class. so it can access the private method of parent class
class privates extends vansh{

    public static function three(){
    parent::accessPrivate(); 
    }


}

// private class  function
privates::three();

?>
