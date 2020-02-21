<?php 
  $arr = scandir("dowlands");

  for ($i = 2; $i < count($arr); $i++) {
    
      switch (explode(".", $arr[$i])[1]) {
         
          case 'docx':
              $icon = 'icons/docx.png';
              break;
          case 'pdf':
              $icon = 'icons/pdf.jpg';
              break;

          default:
              $icon = 'icons/sm.jpg';
              break;
      }

      echo "<a href='dowlands\\$arr[$i]'><img src='$icon' width='20' height='20'>$arr[$i]</a>\n <a href='del.php?file=$arr[$i]'>X</a><br>\n" ;
  }

  echo "<a href='form.html'>start</a>";
?>