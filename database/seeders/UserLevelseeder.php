<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //users
        $users = [
            [
                'name' => 'Arsil N',
                'email' => 'admin@seeder.com',
                'password' => Hash::make('admin'),
                'level' => 'admin',
                'email_verified_at' => now(),
            ],
            [
                'name' => 'Alfian Nurdiansyah',
                'email' => 'manager@seeder.com',
                'password' => Hash::make('manager'),
                'level' => 'manager',
                'email_verified_at' => now(),
            ],
            [
                'name' => 'Alfian Yudohyono',
                'email' => 'kasir@seeder.com',
                'password' => Hash::make('kasir'),
                'level' => 'kasir',
                'email_verified_at' => now(),
            ],
        ];
        foreach ($users as $user) {
            User::create($user);
        }
    }
}