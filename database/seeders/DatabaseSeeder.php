<?php

namespace Database\Seeders;

use App\Models\Subject;
use App\Models\User;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();//usa la entidad User para crear 10 d
        Subject::factory(5)->create();
    }
}
