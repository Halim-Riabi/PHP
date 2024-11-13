<?php
define("first_constant", "C");
define("second_one", 222);
echo"this a constant " , first_constant , " and here's the second one " , second_one ;
echo"\nfirst_constant\n";
echo "this how constant function works: ", constant("first_constant");
// echo "\n ",func_num_args(define("first_constant", "C"));
// define
// define(string $constant_name, mixed $value [, bool $case_insensitive]): bool

?>
