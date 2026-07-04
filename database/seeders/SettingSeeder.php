<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Setting::truncate();
        Schema::enableForeignKeyConstraints();

        $keys = [
            ['key' => 'hotline', 'name' => 'Hotline'],
            ['key' => 'address', 'name' => 'Address'],
            ['key' => 'email', 'name' => 'Email'],
            ['key' => 'social-facebook-url', 'name' => 'Facebook Url'],
            ['key' => 'social-linkedin-url', 'name' => 'Linkedin Url'],
            ['key' => 'social-twitter-url', 'name' => 'Twitter Url'],
            ['key' => 'social-youtube-url', 'name' => 'Youtube Url'],
            ['key' => 'social-instagaram-url', 'name' => 'Instagaram Url'],
        ];

        Setting::insert($keys);
    }
}
