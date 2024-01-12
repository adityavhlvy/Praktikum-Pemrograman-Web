<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Employee;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'username' => 'admin',
            'password' => '12345',
        ]);

        Employee::create([
            'name' => 'Aditya Vahlevy Nugraha',
            'gender' => 'Male',
            'id_employee' => '105221032',
            'department' => 'Alien',
            'position' => '00',
            'work_duration' => '0',
            'salary' => '10000',
        ]);
    }
}
