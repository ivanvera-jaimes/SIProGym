<?php

use Illuminate\Database\Seeder;
use App\Plan;
class planesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plan::create([
            "nombre"=>"Normal",
            "valor"=>"60000"
        ]);
        Plan::create([
            "nombre"=>"Completo",
            "valor"=>"90000"
        ]);
        Plan::create([
            "nombre"=>"Completo + Trainer",
            "valor"=>"160000"
        ]);
    }
}