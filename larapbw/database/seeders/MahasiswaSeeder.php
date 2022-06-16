<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {$faker =Faker::create('en_US');
        for($i=1;$i<=100;$i++){
        DB::table('profil_mahasiswa')->insert([
            'nama' => $faker->name(),
            'gender'=> $faker->randomElement(['Laki','Wanita']) ,
            'jurusan' => $faker->jobTitle(),
            'bidang_minat'=> $faker->suffix()
        ]);}
    }
}
