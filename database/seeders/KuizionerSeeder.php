<?php

namespace Database\Seeders;

use App\Models\Kuizioner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KuizionerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Kuizioner::factory()->create([
            'question' => 'Merasa sehat hari ini?',
            'category_id' => 1,
        ]);
        Kuizioner::factory()->create([
            'question' => 'Sedang minum antibiotic?',
            'category_id' => 1,
        ]);
        Kuizioner::factory()->create([
            'question' => 'Sedang minum obat lain untuk infeksi?',
            'category_id' => 1,
        ]);
        Kuizioner::factory()->create([
            'question' =>
                'Apakah anda sedang minum aspirin atau obat yang mengandung aspirin?',
            'category_id' => 1,
        ]);
        Kuizioner::factory()->create([
            'question' =>
                'Apakah anda akan mengalami sakit kepala dan demam bersamaan?',
            'category_id' => 1,
        ]);
        Kuizioner::factory()->create([
            'question' =>
                'Untuk pendonor wanita : apakah anda sedang hamil? Kemahilan berapa?',
            'category_id' => 1,
        ]);
        Kuizioner::factory()->create([
            'question' =>
                'Apakah anda mendonorkan darah, trombosit atau plasma?',
            'category_id' => 1,
        ]);
        Kuizioner::factory()->create([
            'question' =>
                'Apakah anda menerima vaksinasi atau suntikan lainnya?',
            'category_id' => 1,
        ]);
        Kuizioner::factory()->create([
            'question' =>
                'Apakah anda pernah kontak dengan orang yang menerima vaksinasi smallpox?',
            'category_id' => 1,
        ]);
        Kuizioner::factory()->create([
            'question' =>
                'Apakah anda mendonorkan 2 kantong sel darah merah melalui proses apheresis?',
            'category_id' => 1,
        ]);
        Kuizioner::factory()->create([
            'question' => 'Apakah anda pernah menerima transfuse darah?',
            'category_id' => 1,
        ]);
        Kuizioner::factory()->create([
            'question' =>
                'Apakah anda pernah mendapatkan transplantasi, organ, jaringan, atau sumsum tulang?',
            'category_id' => 1,
        ]);
        Kuizioner::factory()->create([
            'question' => 'Apakah anda pernah cangkok tulang atau kulit?',
            'category_id' => 1,
        ]);
        Kuizioner::factory()->create([
            'question' => 'Apakah anda pernah tertusuk jarum medis?',
            'category_id' => 1,
        ]);
        Kuizioner::factory()->create([
            'question' =>
                'Apakah anda pernah berhubungan seksual dengan orang dengan HIV/AIDS?',
            'category_id' => 1,
        ]);
        Kuizioner::factory()->create([
            'question' =>
                'Apakah anda pernah berhubungan seksual denga orang dengan pekerja seks komersial?',
            'category_id' => 1,
        ]);
        Kuizioner::factory()->create([
            'question' =>
                'Apakah anda pernah berhubungan seksual dengan orang dengan pengguna narkoba jarum suntik?',
            'category_id' => 1,
        ]);
        Kuizioner::factory()->create([
            'question' =>
                'Apakah anda pernah berhubungan seksual dengan orang dengan pengguna konsentrat factor pembekuan?',
            'category_id' => 1,
        ]);
        Kuizioner::factory()->create([
            'question' =>
                'Donor wanita : apakah anda pernah berhubungan seksual dengan laki-laki yang biseksual?',
            'category_id' => 1,
        ]);
        Kuizioner::factory()->create([
            'question' =>
                'Apakah anda pernah berhubungan seksual dengan penderita hepatitis?',
            'category_id' => 1,
        ]);
        Kuizioner::factory()->create([
            'question' => 'Apakah anda tinggal bersama penderita hepatitis?',
            'category_id' => 1,
        ]);
        Kuizioner::factory()->create([
            'question' => 'Apakah anda memiliki tatto?',
            'category_id' => 1,
        ]);
        Kuizioner::factory()->create([
            'question' =>
                'Apakah anda memiliki tindik telinga atau bagian tubuh lainnya?',
            'category_id' => 1,
        ]);
        Kuizioner::factory()->create([
            'question' =>
                'Apakah anda sedang atau pernah mendapatkan pengobatan sifilis atau CO (Kencing nanah)?',
            'category_id' => 1,
        ]);
        Kuizioner::factory()->create([
            'question' =>
                'Apakah anda pernah ditahan penjara untuk waktu lebih dari 72 jam?',
            'category_id' => 1,
        ]);
        Kuizioner::factory()->create([
            'question' =>
                'Apakah anda pernah berada di luar wilayah Indonesia?',
            'category_id' => 1,
        ]);
        Kuizioner::factory()->create([
            'question' =>
                'Apakah anda tinggal selama 3 bulan atau lebih di Inggris?',
            'category_id' => 1,
        ]);
        Kuizioner::factory()->create([
            'question' => 'Apakah tinggal selama 5 tahun atau lebih di Eropa?',
            'category_id' => 1,
        ]);
        Kuizioner::factory()->create([
            'question' => 'Apakah anda menerima transfuse darah di Inggris?',
            'category_id' => 1,
        ]);
        Kuizioner::factory()->create([
            'question' =>
                'Apakah anda menerima uang, obat atau pembayaran lainnya untuk seks?',
            'category_id' => 1,
        ]);
        Kuizioner::factory()->create([
            'question' =>
                'Laki-laki: Apakah anda pernah berhubungan seksual dengan laki-laki, walaupun seksual?',
            'category_id' => 1,
        ]);
        Kuizioner::factory()->create([
            'question' => 'Mendapatkan hasil positif untuk tes HIV/AIDS?',
            'category_id' => 1,
        ]);
        Kuizioner::factory()->create([
            'question' =>
                'Menggunakan jarum suntik untuk obat-obatan, steroid yang tidak diresepkan dokter?',
            'category_id' => 1,
        ]);
        Kuizioner::factory()->create([
            'question' => 'Menggunakan konsentrat factor pembekuan?',
            'category_id' => 1,
        ]);
        Kuizioner::factory()->create([
            'question' => 'Menderita hepatitis?',
            'category_id' => 1,
        ]);
        Kuizioner::factory()->create([
            'question' => 'Menderita malaria?',
            'category_id' => 1,
        ]);
        Kuizioner::factory()->create([
            'question' => 'Menderita kanker termasuk leukimia?',
            'category_id' => 1,
        ]);
        Kuizioner::factory()->create([
            'question' => 'Bermasalah dengan jantung dan paru-paru?',
            'category_id' => 1,
        ]);
        Kuizioner::factory()->create([
            'question' =>
                'Menderita pendarahan atau penyakit berhubungan dengan darah?',
            'category_id' => 1,
        ]);
        Kuizioner::factory()->create([
            'question' =>
                'Apakah anda pernah berhubungan seksual dengan orang yang tinggal di Afrika?',
            'category_id' => 1,
        ]);
        Kuizioner::factory()->create([
            'question' => 'Tinggal di Afrika?',
            'category_id' => 1,
        ]);
        Kuizioner::factory()->create([
            'question' => 'Apakah anda bersedia donor pada waktu bulan puasa?',
            'category_id' => 2,
        ]);
        Kuizioner::factory()->create([
            'question' =>
                'Apakah anda bersedia donor saat dibutuhkan untuk keperluan tertentu? (Diluar donor rutin)',
            'category_id' => 2,
        ]);
        Kuizioner::factory()->create([
            'question' => 'Donor terakhir tanggal?',
            'category_id' => 2,
        ]);
        Kuizioner::factory()->create([
            'question' => 'Sekarang donor yang ke?',
            'category_id' => 2,
        ]);
    }
}
