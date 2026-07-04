<?php

namespace Database\Seeders;

use App\Models\ServiceType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ServiceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        ServiceType::truncate();
        Schema::enableForeignKeyConstraints();

        $services = [
            ['name' => 'To Airport'],
            ['name' => 'From Airport'],
            ['name' => 'Point to Point'],
            ['name' => 'Hourly Charter'],
        ];

        foreach ($services as $data) {
            ServiceType::create([
                'name' => $data['name'],
            ]);
        }
    }
}
