<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            DB::table('produk')->insert([
                'nama' => $faker->word,
                'harga' => $faker->randomNumber(5),
                'bulan' => $faker->numberBetween(1, 12), 
                'tanggal' => $faker->date(),
                'jumlah' => $faker->randomNumber(2),
                'keuntungan' => $faker->randomNumber(4),
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'), 
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
            ]);
        }
    }
}
