<?php
rename ('dowlands//'.$_POST['oldname'],'dowlands//'.$_POST['name'].".".$_POST['ras']);
header("Location: show.php");
?>