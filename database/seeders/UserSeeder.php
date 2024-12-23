<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      User::updateOrCreate(['email'=>'user2@user.com'],[
        'name'=>'user2',
        'password'=>bcrypt('123456789'),

      ]);

    }
}
