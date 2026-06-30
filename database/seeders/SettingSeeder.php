<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::updateOrCreate(['id'=>'1'],[
            'location' => 'صنعاء، اليمن',
            'email' => 'info@company.com',
            'facebook' => 'https://facebook.com/yourpage',
            'linkedin' => 'https://linkedin.com/in/yourpage',
        ]);
    }
}
