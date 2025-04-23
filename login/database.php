<?php
    
    $data = mysqli_connect("localhost","root","","desabangbayang");

    if (!$data){
        echo'gagal';
    }else{
        echo'berhasil';
    }
?>