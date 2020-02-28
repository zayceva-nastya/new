<?php
rename ('dowlands//'.$_POST['oldname'],'dowlands//'.$_POST['name'].".".$_POST['ext']);
header("Location: show.php");
?>