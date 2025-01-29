<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AziendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('aziendas')->insert([
                'nome' => $faker->company,
                'logo' => $faker->imageUrl(640, 480, 'business'),
                'partita_iva' => $faker->numerify('###########'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }
}
