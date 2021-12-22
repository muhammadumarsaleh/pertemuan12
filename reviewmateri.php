<?php
// function katakan($e, $a = "membencimu" ) {
//     echo "aku $e $a";
// }
// katakan("sangat");

// function kelahiran($hari, $date) {
//     echo "$hari, $date";
// }

// kelahiran("Senin", "12 Mei 2003");

// $umar = kelahiran("Senin", "12 Mei 2003");


// echo $umar;


// ----------------------------------------


function harga($a, $b) {
    echo "harga $a ini adalah $b rupiah";
}
harga("sepatu", "100.000");














// $a = 30;


// if($a % 2 == 0) {
//     echo " $a $B $i $ad $b $g ";
// }

// if ($a % 2) {
//     echo "This number is not even.";
//     } else {
//     echo "This number is even.";
//     }

// if($a % 2 == 0) {
//     echo "BENAR";
// }else {echo "SALAH"}

// if($a > 100) {
//     echo "BENAR";
// }else {
//     echo "SALAH";
// }

// var_dump($a > 50 ||$a % 2 == 0) ;

// if($a % 2 == 0) {
//     echo " $a Bilangan ini adalah bilangan genap ";
// }


?>

<?php
// connect ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");
$query = "SELECT * FROM mahasiswa";

if($result = mysqli_query($conn, $query) ) {
    echo "query berhasil";
} else {
    echo "query gagal";
}

// var_dump($conn);
// $mhs = mysqli_fetch_assoc($result)

// while ($mhs = mysqli_fetch_assoc($result)) {
//     var_dump($mhs);
// } 

// urutan
// 1. koneksi
// 2. ambil data
// 3. ambil data lagi dari object
// 4. looping





// menguji error
// if( isset($conn)) {
//     echo "Login Sukses";
// }else{
//     echo "Login Gagal!";
// }

// query data
// koneksi, dan sintaks query

// $query = ("CREATE DATABASE DataToko");
// mysqli_query($conn, $query)
// if( mysqli_query($conn, $query)) {
//     echo "Database berhasil dibuat";
// }else {
//     echo "gagal";
// }




