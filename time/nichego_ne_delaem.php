<?php
$time_start=microtime(1);
 for($i=1;$i<1000;$i++){
     //nichego ne delaem
 }

 $time_end=microtime(1);
 $time=$time_end-$time_start;

 echo "Ничего не делал $time sec \n";