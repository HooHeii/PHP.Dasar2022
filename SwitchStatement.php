<?php

$nilai = "A";


switch ($nilai){
    case "A":
        echo "Anda Lulus Dengan Amat Sangat Baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda Lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda Tidak Lulus" . PHP_EOL;
        break;
    default:
        echo "Mungkin Anda Salah Jurusan" . PHP_EOL;     
}


    ///syntax Statement 

    switch ($nilai):
        case "A":
            echo "Anda Lulus Dengan Amat Sangat Baik" . PHP_EOL;
            break;
        case "B":
        case "C":
            echo "Anda Lulus" . PHP_EOL;
            break;
        case "D":
            echo "Anda Tidak Lulus" . PHP_EOL;
            break;
        default:
            echo "Mungkin Anda Salah Jurusan" . PHP_EOL;     
    endswitch;