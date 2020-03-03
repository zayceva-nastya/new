<?php
print_r($_POST['mail']);
// if(preg_match('/([0-9]{1,})@([0-9A-z\-]{2,})\.([A-z]{2,6})/i',$_POST['mail'])){
if (preg_match('/^([0-9A-Z\-]{1,})@([0-9A-z\-]{2,})\.([A-z]{2,6})$/i', $_POST['mail'])) {
    echo "<br>correct";
} else {
    echo "<br>incorrect";
}
