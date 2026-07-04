<?php

namespace Database\Seeders;

use App\Models\Airport;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class AirportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Airport::truncate();
        Schema::enableForeignKeyConstraints();

        $airports = [
            [
                'name' => 'O \'Hare International Airport',
                'address' => 'O \'Hare International Airport, Chicago, IL 60666',
            ],
            [
                'name' => 'Midway International Airport',
                'address' => 'Midway International Airport ,Chicago, IL 60638',
            ],
            [
                'name' => 'Milwaukee Mitchell Airport',
                'address' => 'Milwaukee Mitchell Airport, Milwaukee WI 53207',
            ],
            [
                'name' => 'Gary International Airport',
                'address' => 'Gary International Airport, 5789 Industrial Hwy, Gary, IN 46406',
            ],
            [
                'name' => 'Dupage Airport',
                'address' => 'DuPage Airport Authority, 2700 International Dr, West Chicago, IL 60185',
            ],
            [
                'name' => 'Chicago Executive Airport',
                'address' => 'Chicago Executive Airport-PWK, 1020 Plant Rd, Wheeling, IL 60090',
            ],

        ];

        Airport::insert($airports);
    }
}
