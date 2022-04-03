<?php

use Illuminate\Database\Seeder;
use App\Office;

class OfficesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Office::create([
            'name'       => 'AGENCIA NACIONAL',
            'intro'       => '07:45',
            'exit'       => '15:00',
            'ip'       => '200.58.74.171',
            'departament_id'       => '1',
        ]);
        Office::create([
            'name'       => 'AGENCIA CALA CALA',
            'intro'       => '07:45',
            'exit'       => '15:00',
            'ip'       => '200.58.74.171',
            'departament_id'       => '1',
        ]);
        Office::create([
            'name'       => 'AGENCIA EL PASO',
            'intro'       => '07:45',
            'exit'       => '15:00',
            'ip'       => '132.251.253.126',
            'departament_id'       => '1',
        ]);
        Office::create([
            'name'       => 'AGENCIA PUNATA',
            'intro'       => '07:45',
            'exit'       => '15:00',
            'ip'       => '190.11.87.98',
            'departament_id'       => '1',
        ]);
        Office::create([
            'name'       => 'AGENCIA CASCO VIEJO',
            'intro'       => '07:45',
            'exit'       => '15:00',
            'ip'       => '177.222.99.79',
            'departament_id'       => '2',
        ]);
        Office::create([
            'name'       => 'AGENCIA RIO SECO',
            'intro'       => '07:45',
            'exit'       => '15:00',
            'ip'       => '177.222.62.12',
            'departament_id'       => '3',
        ]);
    }
}
