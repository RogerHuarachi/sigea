<?php

use Illuminate\Database\Seeder;
use App\Models\City;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create([
            'name'       => 'COCHABAMBA',
        ]);
        City::create([
            'name'       => 'SANTA CRUZ',
        ]);
        City::create([
            'name'       => 'LA PAZ',
        ]);
    }
}
