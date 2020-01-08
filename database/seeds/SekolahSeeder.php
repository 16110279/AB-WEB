<?php

use Illuminate\Database\Seeder;

class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sekolah')->delete();
        $sekolah = array(
            array('nama' => 'SMK Negeri 2 Temanggung',
            'alamat' => 'Jl. Kartini No. 34 B, RT.01 / RW.05, Jampirejo, Margorejo, Jampirejo, Kec. Temanggung, Kabupaten Temanggung, Jawa Tengah 56216',
            'email' => 'smkn2temanggung@gmail.com',
            'telp' => '(0293) 491609'),

            array('nama' => 'SMK Swadaya Temanggung',
            'alamat' => 'Jl. Gilingsari No. 2, Pacarsari, Temanggung II, Kec. Temanggung, Kabupaten Temanggung, Jawa Tengah 56213',
            'email' => 'mkswadayatmg_jateng@yahoo.co.id',
            'telp' => '(0293) 492338'),

            array('nama' => 'SMK Negeri Jumo',
            'alamat' => 'Jalan Raya Jumo-Kedu KM. 2, Gedongsari, Jumo, Pistan, Gedongsari, Temanggung, Kabupaten Temanggung, Jawa Tengah 56256',
            'email' => 'smkn1jumo@gmail.com',
            'telp' => '(0293) 5527882'),

            // array('nama' => ' ',
            // 'alamat' => ' ',
            // 'email' => ' ',
            // 'telp' => ' '),
        );
		DB::table('sekolah')->insert($sekolah);

    }
}
