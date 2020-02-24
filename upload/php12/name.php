<?php
rename ('dowlands//'.$_POST['oldname'],'dowlands//'.$_POST['name']);
header("Location: show.php");
?>