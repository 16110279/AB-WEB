<?php

use Illuminate\Database\Seeder;

class BkkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bkk')->delete();
        $bkk = array(
            array('username' => 'smkn2tmg',
            'email' => 'bkksmkn2@gmail.com',
            'password' =>  \Hash::make("rahasiasekali"),
            'sekolah_id' => 1),

            array('username' => 'smkswadaya',
            'email' => 'bkkswadaya@gmail.com',
            'password' =>  \Hash::make("rahasiasekali"),
            'sekolah_id' => 2),

            array('username' => 'smknjumo',
            'email' => 'bkkjumo@gmail.com',
            'password' =>  \Hash::make("rahasiasekali"),
            'sekolah_id' => 3),

            // array('username' => '',
            // 'email' => '',
            // 'password' =>  \Hash::make(""),
            // 'sekolah_id' => ''),
        
        );
        
        DB::table('bkk')->insert($bkk);

    }
}
