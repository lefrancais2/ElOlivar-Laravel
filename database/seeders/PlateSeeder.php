<?php

namespace Database\Seeders;

use App\Models\Plate;
use App\Models\Image;

use Illuminate\Database\Seeder;

class PlateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plate::factory(250)->create()->each(function(Plate $plate){
            Image::factory(4)->create([
                'imageable_id' => $plate->id,
                'imageable_type' => Plate::class
            ]);
        });
    }
}
