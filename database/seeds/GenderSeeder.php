<?php

use Author\Models\Gender;
use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gender::insert([
            'id' => '1',
            'name' => 'Male',
        ]);

        Gender::insert([
            'id' => '2',
            'name' => 'Female',
        ]);
    }
}
