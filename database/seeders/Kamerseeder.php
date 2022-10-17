<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class Kamerseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('kamer')->insert([


            ['nummer_kamer' => '11'],

            ['naam_kamer' => 'The love sweet'],

            ['id' => '1'],

            ['foto_kamer' => 'room1.jpg'],

            ['oppervlakte_kamer' => '200'],

            ['minibar_kamer' => 'Beschikbaar'],

            ['persoonen_kamer' => '5'],

            ['bad_kamer' => 'bad'],

            ['prijs_kamer' => '69.99',]




        ]);
    }
}
