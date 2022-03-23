<?php

namespace Database\Seeders;

use App\Models\UserDomicilio;
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
        UserDomicilio::factory(100)->create();
    }
}
