<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DipendenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $aziende = DB::table('aziendas')->pluck('id');

        foreach (range(1, 30) as $index) {
            DB::table('dipendentes')->insert([
                'nome' => $faker->firstName,
                'cognome' => $faker->lastName,
                'aziendas_id' => $faker->randomElement($aziende),
                'telefono' => $faker->phoneNumber,
                'email' => $faker->unique()->safeEmail,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
