<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = new User();
        $userData->name = 'Hida';
        $userData->email = 'hidayatulkhasanah760@gmail.com';
        $userData->password = bcrypt('Hidacantik');
        $userData->save();

    }
}
