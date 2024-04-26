<?php
class vansh{
    public function one($num){
        if($num == 0 || $num == 1){
            return 1;
        }
        else{
            return $num * $this->one($num - 1);
        }
    }
}


$obj = new vansh();
echo $obj->one(5); 
?>
