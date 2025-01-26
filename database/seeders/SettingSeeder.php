<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings=Setting::updateOrCreate(['id'=>1],[
            'name'=>'Mostafa',
            'email'=>'Mostafa@gm.com',
            'facebook'=>'https://www.facebook.com',
            'linkedin'=>'https://www.linkedin.com',
            'whatsapp'=>'0123456789',
            'youtube'=>'https://www.youtube.com',
        ]);
        
            
    }
}
