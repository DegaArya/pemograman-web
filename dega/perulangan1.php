<?php //adalah tag untuk membuka dan menutup blok kode PHP.

 $bil = 1; 
 /*adalah inisialisasi variabel `$bil` dengan nilai 1. Variabel ini akan digunakan untuk menyimpan bilangan yang sedang diproses 
 dalam perulangan.*/
 
 while($bil <= 10){
/*adalah awal dari struktur perulangan `while`. Ini mengevaluasi ekspresi di dalam tanda kurung `()` dan menjalankan blok kode di 
dalamnya selama ekspresi tersebut bernilai `true`.*/

 echo "Bilangan Sekarang adalah $bil <br>";
 /*echo "Bilangan Sekarang adalah $bil <br>";` adalah perintah untuk mencetak teks yang berisi nilai variabel `$bil` menggunakan 
 #`echo`. Teks ini akan mencetak nilai `$bil` saat itu.*/

 $bil++;
 /*5. `$bil++;` adalah perintah untuk menaikkan nilai variabel `$bil` sebesar 1 setiap kali perulangan selesai dieksekusi. Ini 
 menghindari terjadinya perulangan tak terbatas (infinite loop) dengan memastikan bahwa nilai `$bil` akan berubah dan pada 
 akhirnya melewati batas yang telah ditentukan (`10` dalam kasus ini).*/

 }#menutup blok kode perulangan `while`.

 #Dengan demikian, perintah di atas akan menghasilkan output berupa barisan bilangan dari 1 hingga 10, masing-masing dengan teks 
 #"Bilangan Sekarang adalah ..." diikuti dengan nilai bilangan tersebut.
?>



