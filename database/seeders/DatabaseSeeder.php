<?php

namespace Database\Seeders;

use App\Models\profile;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        profile::factory(30)->create();
    }
}
