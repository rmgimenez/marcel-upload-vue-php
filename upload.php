<?php

// File name
$filename = $_FILES['file']['name'];

// Valid file extensions
$valid_extensions = array("jpg","jpeg","png","pdf");

// File extension
$extension = pathinfo($filename, PATHINFO_EXTENSION);

// Check extension
if(in_array(strtolower($extension),$valid_extensions) ) {

    $nome = md5(rand(1, 10000000));
    $nome = substr($nome, 1, 8);
    $nome_arquivo = $nome."_".$filename;

   // Upload file
   if(move_uploaded_file($_FILES['file']['tmp_name'], "uploads/".$nome_arquivo)){
      echo $nome_arquivo;
   }else{
      echo 0;
   }
}else{
   echo 0;
}

exit;