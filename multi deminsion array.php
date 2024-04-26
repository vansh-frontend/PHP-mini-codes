<?php

const a = array(
    array('vansh','22BCA10001',21),
    array('navraj','22BCA10008',20),
    array('madhav','22BCA10013',19)
);

for($row = 0; $row < 3; $row++)
{
    echo "student", $row;

    for($col = 0; $col < 3; $col++){

        echo  "<li>".a[$row][$col]."</li>";
    }
    echo "<br>";
}
?>