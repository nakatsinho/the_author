<?php

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::insert([
            'id' => '1',
            'name' => 'Mozambique',
            'code' => 'MZ',
        ]);

        Country::insert([
            'id' => '2',
            'name' => 'Angola',
            'code' => 'AG',
        ]);

        Country::insert([
            'id' => '3',
            'name' => 'South Africa',
            'code' => 'RAS',
        ]);
    }
}
