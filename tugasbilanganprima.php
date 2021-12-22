<?php
// tugas2
// buat array[1,5,6,7,11,17,18,20];
// cetak isi dalam array yang termasuk bilangan prima,
// cetak dari bilangan prima terbesar.


$angka = [1,5,6,7,2,11,17,18,20];

for( $i=0; $i<=7; $i++ ) {
    $a = 0;
    for($j=1; $j<=$angka[$i]; $j++) {
        if($angka[$i] % $j == 0) {
            $a++;
        }
    }
    if($a == 2) {
        echo "$angka[$i], ";
        
        
    }
    //    echo $angka[$i]%2;

}

// echo "rsort($angka[$i]), ";

// $angka = [1,5,6,7,11,17,18,20];
// $a = 0;
// for($j=1; $j<=7; $j++) {
//     if(31 % $j == 0) {
//        echo $a++;
//     }
// }
 





// rsort($angka);

// print_r($angka);




// ----------------------------------


// for($a=0; $a<=count ($angka); $a++) {
//     $prima = true;
//     for($i=2; $i<$a; $i++)
//     {
//         if( ($angka[$a] ) % $i == 0 )
//         $prima = false;
//     }
//     if($prima)
//     echo "$angka[$a]" ;
// }

// -------------------------------

// $angka = [1,5,6,7,11,17,18,20];
// $nilai = count($angka);

// for( $i=1; $i<= $nilai; $i++ ) {
//     $a = 0;

//     for( $j = 1; $j <= $i; $j++) {
//         if( $i % $j == 0) {
//             $a++;
//         }
//     }

//     if($a == 2) {
//         echo $i. '<br>';
//     }
//     // echo $i. '<br>';

// }


// --------------------------------


// for($a=1; $a<=sizeof($angka); $a++) {                        // perulangan 1 sampai 20
//     $k=0;
//     for( $b=1; $b<=$a; $b++){                    // perulangan bilangan pembagi
//         if($a % $b == 0){                        // modulus
//             $k++;
//         }
//     }
//         if($k == 2)
//         {                           // salah satu syarat 2 bukan merupakan bilangan prima
//         echo $angka[$a].',';
//         }
// }
 

// --------------------

// <?php

//   # Clue : Syarat Bilangan Prima yaitu bilangan yang habis d i bagi bilangan itu sendiri dan dibagi 1, tapi angka 1 bukan bilangan prima

//   for($i=1;$i<=50;$i++){ // angka awal variable i adalah 1 , set sampai kurang dari sama dengaccn 50 , i increment
//         $a = 0; //variable a sama dengan 0
//         for($j=1;$j<=$i;$j++){ // angka awal variable j adalah i , jika variable j kurang dari sama dengan (hasil dari variable i) brarti juga 50 , j increment
//             if($i % $j == 0){ // jika i dibagi j sama dengan 0 /habis dibagi
//                 $a++; //// variable a increment
//             }
//         }
//         if($a == 2){ //menyeleksi bilangan prima atau bukan, dikatakan bilangan prima jika bilangan itu hanya bisa dibagi oleh bilangan satu atau dibagi bilangan itu sendiri
//          echo $i.' '; // mengeluarkan nilai var $i dengan whitespace
//         }
//     }

//   # Hasil : 2 3 5 7 11 13 17 19 23 29 31 37 41 43 47
?>