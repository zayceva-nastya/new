<?php
if(is_uploaded_file($_FILES['username']['tmp_name'])){
copy($_FILES['username']['tmp_name'],"file\\".$_FILES['username']['tmp_name']);

}
echo "<pre>";
print_r($_FILES);
phpinfo()
?>