<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookWriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $i = 0;

        while ($i <= 10) {
            DB::table('books_writers')->insert([
                'book_id' => $faker->numberBetween(1, 10),
                'writer_id' => $faker->numberBetween(1, 5)
            ]);

            $i++;

        }
    }
}
