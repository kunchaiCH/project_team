<?php
$dir = "uploadpicture/";
$fileimage = $dir . basename($_FILES["file"]["name"]);

if (move_uploaded_file($_FILES["file"]["tmp_name"],$fileimage)){
    echo "uploaded";
}else{
    echo "don't uploaded";
}

?>