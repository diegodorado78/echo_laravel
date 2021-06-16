<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        Subject::create([
    'name'=>'Matemáticas','description' => 'lorenm ipsun','image'=> 'math image'
         ]);
Subject::create([
    'name'=>'Programación','description' => 'lorenm ipsun','image'=> 'https://via.placeholder.com/1280x720.png/00ff99?text=explicabo'
         ]);
         Subject::create([
    'name'=>'Edición Video','description' => 'lorenm ipsun','image'=> 'https://via.placeholder.com/1280x720.png/0000aa?text=qui'
         ]);
         Subject::create([
    'name'=>'Inglés','description' => 'lorenm ipsun','image'=> 'https://via.placeholder.com/1280x720.png/000099?text=similique'
         ]);
         Subject::create([
    'name'=>'Base de datos','description' => 'lorenm ipsun','image'=> 'https://via.placeholder.com/1280x720.png/007788?text=autem'
         ]);
          Subject::create([
    'name'=>'PhotoShop','description' => 'lorenm ipsun','image'=> 'https://via.placeholder.com/1280x720.png/00ff99?text=explicabo'
         ]);
     Subject::factory(20)->create();//usa la entidad User para crear 10 d

    }
}
