<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'username' => 'adminhotel',
                'name' => 'admin',
                'email' => 'admin@example.com',
                'level' => 'admin',
                'password' => bcrypt('admin123')
            ],
            [
                'username' => 'tamuhotel',
                'name' => 'tamu',
                'email' => 'tamu@example.com',
                'level' => 'tamu',
                'password' => bcrypt('tamu123')
            ],
            [
                'username' => 'resepsionis',
                'name' => 'resepsionis',
                'email' => 'resepsionis@example.com',
                'level' => 'resepsionis',
                'password' => bcrypt('resepsionis123')
            ]
        ];
        foreach ($user as $key => $value){
            User::create($value);
        }
    }
}
