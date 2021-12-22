<?php
// tugas2
// buat array[1,5,6,7,11,17,18,20];
// cetak isi dalam array yang termasuk bilangan prima,
// cetak dari bilangan prima terbesar.

// $angka = [1,5,6,7,11,17,18,20];


// for( $a = 1; $a <= 8; $a++) {
//     echo $angka;
// }





for($a=1;$a<=20;$a++)
    $k=0;
    for($b=1;$b<=$a;$b++){ // perulangan bilangan pembagi
        if($a % $b == 0){ // modulus
            $k++;
        }
    }
        if($k == 2){ // salah satu syarat 2 bukan merupakan bilangan prima
        echo $a.',';
        }

 
?>
