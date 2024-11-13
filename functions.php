<?php
define("PI",3.14);
function testing() 
{
    $numberofargs=func_num_args();
    echo "the number of args = $numberofargs \n";
    // echo testing[1];
    echo PI;
}
testing("a","b","c", 1, 25, 5,PI);

?>