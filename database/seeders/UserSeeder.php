<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Psy\Util\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            'textUp'=>'Разведение индейки',
            'textDown'=>'Более 45 лет занимаемся выращиванием индейки',
            'link' =>'http://127.0.0.1:8000/',
            'photo'=>'storage/storage/kukushka_09.jpg',
        ]);
    }
}
