<?php

$file = $_GET['file']. ".png";

header("content-disposition: attachment; filename=" .urlencode($file));

$file_open = fopen($file, "r");

while(!feof($file_open)){
    echo fread($file_open,559104);
    flush();
}


fclose($file_open);

?>