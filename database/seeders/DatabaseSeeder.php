<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subject;
use App\Models\User;
use App\Models\Request;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Request::factory(8)->create();
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(SubjectSeeder::class);


      }
}
