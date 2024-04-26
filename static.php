<?php
 
class std{
    public static function name(){
        // public function name(){
            echo "vansh";
        // }
    }
}

class vansh extends std{
    public static function id(){
        self::name();
        echo "vansh id";
    }

}

vansh::id();
?>