<?php
unlink('dowlands\\'.$_GET['file']);
header("Location: show.php");

?>