<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->delete();

        $admin = array(
             array('name' => 'bagus',
            'email' => 'bagusedi@gmail.com',
            'password' =>  \Hash::make("rahasiasekali")),

             array('name' => 'cengus',
            'email' => 'cengus@gmail.com',
            'password' =>  \Hash::make("rahasiasekali")),
        );

        DB::table('admin')->insert($admin);


    }
}
