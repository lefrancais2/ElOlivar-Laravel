<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Plate;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Storage::deleteDirectory('plates');

        Storage::makeDirectory('plates');

        $this->call(PlateSeeder::class);

        

    }
}
