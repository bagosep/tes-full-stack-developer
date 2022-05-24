## Penjelasan
Pada case kali ini langkah pertama adalah saya configurasi app.php untuk mengubah timezone dan locale menjadi Indonesia agar faker yang digenerate oleh model factory nanti akan return data dummy Indonesia. Selanjutnya saya buat migration, model dan controller sesuai dengan yang dibutuhkan, lalu edit file migration sesuai dengan case yang telah tersedia. 

Setelah itu saya membuat factory dan seeder yang digunakan untuk me-generate data dummy yang memanfaatkan library faker. lalu pada model observer ini saya memanfatkannya untuk membuat slug jadi ketika model factory dijalankan saya tidak perlu lagi menuliskan slug didalam array data yang akan dikirimkan ke table posts.

Selain memanfaatkan library faker, saya disini menggunakan library carbon untuk custom date created at yang ditampilkan ke client agar bisa dipahami dengan mudah. 

## Kekurangan
1. Pada table comment ada field name dan email, ini lebih baik dipindah kedalam table lain yang lebih relevan misal dijadikan satu dengan users, lalu di table comment tinggal mengambil FK saja.
2. Comment as guest lebih baik dibuatkan table sendiri untuk menyimpan user as guest nya. 
3. Dengan tidak adanya relasi antara comments dengar users menurut saya ini kurang normal dalam bentuk table dan relasinya, sehingga disini saya memanfaatkan email users yang unik untuk merelasikan antara table comments dan users. lalu untuk mendapatkan comment as guest saya memanfaatkan where not in untuk mendapatkan users yang tidak terdaftar di sistem

