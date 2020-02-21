<?php

if (is_uploaded_file($_FILES['fail']['tmp_name'])) {
        copy($_FILES['fail']['tmp_name'], "dowlands\\" . $_FILES['fail']['name']);
    }

   header("Location: show.php");
   ?>
