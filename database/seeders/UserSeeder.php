<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = Hash::make('admin@123');
        // Default credentials
        // \App\Models\User::insert([
        //     [
        //         'name' => 'Left4code',
        //         'email' => 'midone@left4code.com',
        //         'email_verified_at' => now(),
        //         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        //         'gender' => 'male',
        //         'active' => 1,
        //         'remember_token' => Str::random(10)
        //     ]
        // ]);

        // // Fake users
        // User::factory()->times(9)->create();

        User::insert([
                [
                    'name' => 'admin',
                    'email' => 'admin@gmail.com',
                    'password' => $password, // admin@123
                    'type' => 'admin',
                    'status' => 'active',
                    'mobile' => 123456788,
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                ]
            ]);

            // Fake users
            //User::factory()->times(1)->create();
    }
}
