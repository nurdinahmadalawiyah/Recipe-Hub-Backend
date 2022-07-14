<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $food = [
            [
                'id' => 1,
                'title' => 'Ayam Goreng',
                'category' => 1,
                'creator' => 'Recipe Hub Admin',
                'ingredients' => 'Tepung, Garam, Lengkuas, Kemiri',
                'instructions' => 'Potong-potong ayam menjadi 8 bagian. Cuci bersih lalu tiriskan hingga tidak berair.Bumbu: Giling semua bahan bumbu hingga halus benar. Panaskan minyak, tumis bumbu halus hingga wangi. Tambahkan daun salam, daun jeruk, lengkuas dan serai, aduk rata. Masukkan potongan ayam, aduk hingga kaku. Tuangi air kelapa, tutup wajan. Masak dengan api sedang hingga bumbu meresap dan ayam empuk. Angkat dan dinginkan. Panaskan minyak banyak dalam wajan di atas api sedang. Goreng ayam hingga kering kecokelatan. Angkat dan tiriskan. Sajikan ayam dengan sambal goreng atau sambal dadak dan lalapan.',
                'duration' => 10,
                'image' => 'food_ayam_1.jpeg',
            ],
            [
                'id' => 2,
                'title' => 'Ayam Bakar',
                'category' => 1,
                'creator' => 'Recipe Hub Admin',
                'ingredients' => 'Bawang merah, Cabai, Kecap',
                'instructions' => 'Panaskan minyak, tumis bumbu halus, daun salam, dan serai hingga harum. Masukkan air larutan asam Jawa dan ayam, aduk rata. Tuangkan santan, aduk perlahan agar santan tidak pecah. Masak hingga santan meresap dan ayam empuk. Angkat dan sisihkan. Panaskan wajan, panggang ayam sambil diolesi bumbu halus dan kecap. Panggang hingga berwarna kecokelatan. Angkat dan sajikan.',
                'duration' => 20,
                'image' => 'food_ayam_2.jpg',
            ],
            [
                'id' => 3,
                'title' => 'Ayam Bumbu Kuning',
                'category' => 1,
                'creator' => 'Recipe Hub Admin',
                'ingredients' => 'Kunyit, Sereh, Santan, Garam',
                'instructions' => 'Campurkan air dengan bumbu halus. Ungkep ayam bersama air dan bumbu. Diamkan selama 1 jam. Masak ayam, masukkan daun serai dan daun salam. Sajikan ayam bumbu kuning selagi hangat.',
                'duration' => 25,
                'image' => 'food_ayam_3.jpg',
            ],
            [
                'id' => 4,
                'title' => 'Bebek Bakar',
                'category' => 2,
                'creator' => 'Recipe Hub Admin',
                'ingredients' => 'Kecap,Bawang Merah,Garam',
                'instructions' => 'Siapkan panci tekan. Potong bebek menjadi 4 bagian, lumuri dengan air jeruk nipis/cuka, sisihkan selama 10 menit. Cuci bebek hingga bersih dan bau amisnya berkurang. Lumuri potongan bebek dengan bumbu halus, remas-remas hingga seluruh bagian bebek berlumur bumbu, sisihkan selama 15 menit agar bumbu meresap. Masukkan bebek ke dalam panci presto, tuang air panas. Tambahkan serai dan daun salam. Tutup panci presto rapat-rapat, jerang di atas api selama 60 menit hingga terdengar bunyi mendesis, angkat. Biarkan hingga dingin, baru buka tutup panci. Tiriskan bebek. Pisahkan bumbunya, lalu campur dengan  minyak goreng dan kecap manis, aduk. Bakar bebek di atas bara api sambil olesi bumbu di permukaannya hingga tercium aroma bakar, angkat. Sajikan bebek bakar kecap selagi hangat.',
                'duration' => 25,
                'image' => 'food_bebek_1.jpg',
            ],
            [
                'id' => 5,
                'title' => 'Bebek Goreng',
                'category' => 2,
                'creator' => 'Recipe Hub Admin',
                'ingredients' => 'Gula, Salam, Serai, Bawang Putih',
                'instructions' => 'Lumuri bebek dengan bumbu yang telah dihaluskan, daun salam, daun jeruk, dan serai hingga rata. Ungkep dengan diberi air hingga matang dan bumbu meresap. Ungkep sampai air surut dan bebek empuk. Angkat. Bebek ungkep bisa langsung disantap atau digoreng. Sajikan hangat bersama sambal dan lalapan.',
                'duration' => 15,
                'image' => 'food_bebek_2.jpeg',
            ],
            [
                'id' => 6,
                'title' => 'Burger',
                'category' => 5,
                'creator' => 'Recipe Hub Admin',
                'ingredients' => 'Roti, Daging, Salada, Mayones',
                'instructions' => 'Campurkan tepung, susu bubuk, ragi, gula, telur dan susu cair uleni setengah kalis. Tambahkan butter dan garam uleni lagi hingga kalis elastis. Bulatkan adonan kemudian istirahatkan sekitar 45 menit atau sampai mengembang 2 kali lipat. Setelah mengembang, kempiskan adonan kemudian timbang adonan masing-masing sekitar 55 gr, bulatkan dan tata di loyang. Diamkan lagi sekitar 30 menit atau sampai mengembang. Oles atas roti dengan susu UHT kemudian taburi dengan wijen. Panggang di oven dengan suhu 170-180 derajat Celcius atau sesuaikan dengan oven masing-masing sampai matang kecokelatan',
                'duration' => 10,
                'image' => 'food_fastfood_1.jpg',
            ],
            [
                'id' => 7,
                'title' => 'Pizza',
                'category' => 5,
                'creator' => 'Recipe Hub Admin',
                'ingredients' => 'Roti, Sosis, Bawang Putih, Saus',
                'instructions' => 'Mix tepung, gula, susu, ragi hingga rata, tambahkan air, mix hingga halus, tambahkan mentega dan garam, mix hingga elastis, bulatkan, diamkan 30 menit. Bagi 3 bagian, bulatkan, diamkan kembali 10 menit. Bentuk pizza dengan sisi luar lebih tebal, tusuk-tusuk dengan garpu, diam hingga kembang. Oven setengah matang, keluarkan. Oles saus pizza, tabur sosis, keju, dan bahan lainnya. Oven kembali hingga matang, selamat menikmati.',
                'duration' => 5,
                'image' => 'food_fastfood_2.webp',
            ],
            [
                'id' => 8,
                'title' => 'Cumi Saus Tiram',
                'category' => 4,
                'creator' => 'Recipe Hub Admin',
                'ingredients' => 'Cumi, Cabai Merah, Bawang Putih',
                'instructions' => 'Potong bagian kanan badan cumi. Panaskan minyak goreng, tumis bawang bombay sampai layu. Masukkan bawang putih, masak hingga harum. Masukkan cumi dan Saus Tiram Selera. Aduk rata. Tambahkan air. Aduk rata dan masak hingga matang. Angkat dan siap disajikan selagi hangat.',
                'duration' => 10,
                'image' => 'food_seafood_1.jpg',
            ],
            [
                'id' => 9,
                'title' => 'Udang Saus Tiram',
                'category' => 4,
                'creator' => 'Recipe Hub Admin',
                'ingredients' => 'Udang, Cabai Merah, Bawang Putih',
                'instructions' => 'Lumuri udang dengan garam dan merica bubuk sampai rata, diamkan kurang lebih selama 15 menit, kemudian goreng dalam minyak banyak dan panas sampai matang dan kering, angkat, lalu tiriskan dan sisihkan. Panaskan margarin, kemudian masukkan bawang putih dan bawang bombay, tumis sampai harum. Masukkan saus tiram, kecap manis Bango, kecap asin, minyak wijen, dan air, sampai rata, masak sampai mendidih, kemudian masukkan udang tadi, aduk rata, angkat dan terakhir sajikan.',
                'duration' => 15,
                'image' => 'food_seafood_2.jpg',
            ],
            [
                'id' => 10,
                'title' => 'Mie Goreng',
                'category' => 3,
                'creator' => 'Recipe Hub Admin',
                'ingredients' => 'Mie, Bawang Goreng, Tomat, Garam',
                'instructions' => 'Tumis irisan bawang merah, putih dan cabai hingga harum. Tambahkan kocokan telur lepas dan aduk rata di atas wajan. Masukan mie, taoge, dan sawi yang telah direbus dan ditiriskan sebelumnya. Kembali aduk perlahan. Tambahkan gula, garam, merica dan Bango Kecap Manis  secukupnya. Setelah matang dan tercampur rata, angkat dan sajikan dengan pelengkap.',
                'duration' => 15,
                'image' => 'food_noodle_1.jpg',
            ],
            [
                'id' => 11,
                'title' => 'Mie Rebus',
                'category' => 3,
                'creator' => 'Recipe Hub Admin',
                'ingredients' => 'Mie, Jeruk Nipis, Tomat, Telur',
                'instructions' => 'Tumis bumbu halus hingga harum. Masukkan udang, ayam, dan telur orak arik. Masak hingga udang dan ayam berubah warna. Tambahkan air dan didihkan. Masukkan mie, sayuran, bumbu saus, lada dan garam. Aduk hingga semua tercampur rata. Cicipi dan koreksi rasa. Matikan api bila sayuran sudah layu. Sajikan mie rebus nyemek dengan taburan daun bawang dan bawang merah goreng. Tambahkan kerupuk dan acar',
                'duration' => 15,
                'image' => 'food_noodle_2.jpg',
            ],
        ];
        DB::table('food')->insert($food);
    }
}
