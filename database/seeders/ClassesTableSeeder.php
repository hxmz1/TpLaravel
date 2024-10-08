<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('classes')->insert([
            ['libelle'=>'6ème'],
            ['libelle'=>'5ème'],
            ['libelle'=>'4ème'],
            ['libelle'=>'3ème'],
            ['libelle'=>'2ème'],
            ['libelle'=>'1ère'],

        ]);
    }
}
