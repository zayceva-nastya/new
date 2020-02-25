<?php
file_put_contents('dowlands\\'.$_POST['old'],$_POST['newedit']);
header("Location: show.php");
?>