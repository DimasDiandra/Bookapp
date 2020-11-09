<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'title' => 'War of the Worlds',
            'description' => 'A science fiction masterpiece about Martians invading London',
            'author' => 'H. G. Wells',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('books')->insert([
            'title' => 'A Wrinkle in Time',
            'description' => 'A young girl goes on a mission to save her father who has gone missing after working on a mysterious project called a tesseract.',
            'author' => 'Madeleine L\'Engle',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('author')->insert([
            'name' => 'Ali Rusli',
            'gender' => 'Male',
            'biography' => 'Ali Rusli merupakan penulis muda yang saat ini namanya sedang naik daun. Berkat karyanya yang menyentuh, Ali Rusli mampu menjangkau selera semua kalangan masyarakat pada umumnya.

            Ali Rusli merupakan anak terakhir dari pasangan Ardiansyah dengan Maria yang merupakan seorang mualaf berbangsaan China. Ali Rusli memiliki dua kakak perempuan bernama Casandra dan Clara.
            
            Ayah Rusli merupakan dosen di Universitas Indonesia, sedangkan ibunya adalah seorang jurnalistik untuk portal berita. Ali Rusli dan keluarga sangat menyukai seni tulis, bahkan kedua kakaknya juga berprofesi sebagai penulis novel.
            
            Hidup dalam keluarga yang memiliki ketertarikan dibidang jurnalistik membuat Ali juga menyukai bidang tersebut. Tak heran jika sejak kecil Ali berkeinginan untuk mengikuti jejak keluarganya untuk menjadi seorang penulis.
            
            Untuk memperdalam pemahaman Ali dalam bidang jurnalistik, akhirnya ia memutuskan untuk mengambil kuliah jurusan Sastra di Universitas Padjajaran. Selama masa kuliah Ali sudah mulai menulis diberbagai media online.
            
            Ketertarikan Ali dalam bidang penulisan cerpen dan novel membuat ia akhirnya menyelesaikan karya pertamanya. Novel tersebut ia kirimkan ke penerbit dan ternyata reaksinya sangat luar biasa.
            
            Melalui novel berjudul “Pulang” Ali memulai debutnya sebagai penulis. Karyanya yang menginspirasi membuat banyak sekali orang yang menyukainya.',

            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('author')->insert([
            'name' => 'Mira Alzahra',
            'gender' => 'Female',
            'biography' => 'Senja merupakan nama pena yang dimiliki oleh sebuah penulis bernama asli Mira Alzahra. Bisa dibilang bahwa Mira merupakan salah satu penulis yang berbakat dan paling produktif.

            Hal tersebut terbukti dari berbagai hasil karyanya yang muncul pada setiap tahun. Karya yang dihasilkan Mira cukup beragam mulai dari kisah romansa hingga kalimat-kalimat yang menginspirasi. Beberapa karya Mira bahkan masuk dalam jajaran novel best seller yang banyak dicari oleh para pembaca. Selain menerbitkan buku, Mira juga masih aktif menulis cerpen di beberapa media online.',

            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        // $this->call('UsersTableSeeder');
    }
}
