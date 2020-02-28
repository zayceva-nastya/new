<?php
$str="Not to Be";
$pat="/^(be)|(not\sto\sbe)$/i";//либо только be либо всё выражение
if(preg_match($pat,$str)){
    echo "Yes";
}else{
    echo "no";
}

?>