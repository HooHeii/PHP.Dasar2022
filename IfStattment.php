<?php

    ////syntax If Statement

$nilai = 80;
$absen = 90;

if ($nilai >= 75 && $absen >= 75){
    echo "Selamat Anda Lulus" . PHP_EOL;
}


    ////Else Statement

$nilai = 70;
$absen = 90;
    
if ($nilai >= 75 && $absen >= 75){
    echo "Selamat Anda Lulus" . PHP_EOL;
} else {
    echo "Anda Tidak Lulus" . PHP_EOL;
}

    ///Else If Statement

    $nilai = 60;
    $absen = 90;
        
    if ($nilai >= 75 && $absen >= 75){
        echo "Selamat Anda Lulus" . PHP_EOL;
    
      } elseif ($nilai >= 70 && $absen >= 70){
        echo "Nilai Anda A" . PHP_EOL;

      } elseif ($nilai >= 60 && $absen >= 60){
        echo "Nilai Anda B" . PHP_EOL;

      } elseif ($nilai >= 50 && $absen >= 50){
        echo "Nilai Anda C" . PHP_EOL;

      } elseif ($nilai >= 40 && $absen >= 40){
          echo "Nilai Anda D" . PHP_EOL;

      } else {
        echo "Nilai Anda E" . PHP_EOL;
      }


    ///statement Dengan Colom

    $nilai = 60;
    $absen = 90;
        
    if ($nilai >= 75 && $absen >= 75) :
        echo "Selamat Anda Lulus" . PHP_EOL;
    
        elseif ($nilai >= 70 && $absen >= 70) :
          echo "Nilai Anda A" . PHP_EOL;

          elseif ($nilai >= 60 && $absen >= 60) :
            echo "Nilai Anda B" . PHP_EOL;

            elseif ($nilai >= 50 && $absen >= 50) :
              echo "Nilai Anda C" . PHP_EOL;

          elseif ($nilai >= 40 && $absen >= 40) :
              echo "Nilai Anda D" . PHP_EOL;

        else :
          echo "Nilai Anda E" . PHP_EOL;
     endif;