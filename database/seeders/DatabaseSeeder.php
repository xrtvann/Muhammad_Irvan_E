<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

       

        Student::factory()->create([
            'fullname' => 'Muhammad Irvan',
            'nim' => 'E41241822',
            'gender' => 'laki-laki',
            'class' => 'E',
        ]);


    }
}
