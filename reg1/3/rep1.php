<?php
include('fun.php');


echo bb_code(smile(filter(htmlspecialchars($_POST['msg']))));

?>