<?php

use Illuminate\Database\Seeder;
use App\Models\Agency;
class AgenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Agency::create([
            'name'       => 'AGENCIA NACIONAL',
            'intro'       => '07:45',
            'exit'       => '15:00',
            'ip'       => '200.58.74.171',
            'city_id'       => '1',
        ]);
        Agency::create([
            'name'       => 'AGENCIA CALA CALA',
            'intro'       => '07:45',
            'exit'       => '15:00',
            'ip'       => '200.58.74.171',
            'city_id'       => '1',
        ]);
        Agency::create([
            'name'       => 'AGENCIA EL PASO',
            'intro'       => '07:45',
            'exit'       => '15:00',
            'ip'       => '132.251.253.126',
            'city_id'       => '1',
        ]);
        Agency::create([
            'name'       => 'AGENCIA PUNATA',
            'intro'       => '07:45',
            'exit'       => '15:00',
            'ip'       => '190.11.87.98',
            'city_id'       => '1',
        ]);
        Agency::create([
            'name'       => 'AGENCIA CASCO VIEJO',
            'intro'       => '07:45',
            'exit'       => '15:00',
            'ip'       => '177.222.99.79',
            'city_id'       => '2',
        ]);
        Agency::create([
            'name'       => 'AGENCIA RIO SECO',
            'intro'       => '07:45',
            'exit'       => '15:00',
            'ip'       => '177.222.62.12',
            'city_id'       => '3',
        ]);
    }
}
