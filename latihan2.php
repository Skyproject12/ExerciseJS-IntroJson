<?php 

    // mengambil file json dengan nama coba
    $data= file_get_contents('coba.json'); 
    // mengubah file json menjadi object 
    $mahasiswa= json_decode($data, true); 
    var_dump($mahasiswa);  
    // mengeprin mahasiswa index ke 0 dalam pembimbing lalu pilih pembimbing satu 
    echo $mahasiswa[0]["pembimbing"]["pembimbing1"];  

?>