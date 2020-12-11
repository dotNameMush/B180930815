<?php

namespace Database\Seeders;

use Carbon\Factory;
use Illuminate\Database\Seeder;

class AnimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Anime::factory(10)->create();
    }
}
