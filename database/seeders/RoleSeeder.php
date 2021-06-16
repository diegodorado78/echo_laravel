<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role1=  Role::create(['name' => 'Administrador']);
      $role2=  Role::create(['name' => 'Usuario']);
       $role3=  Role::create(['name' => 'Estudiante']);
        $role4=  Role::create(['name' => 'Tutor']);
      Permission::create(['name' => 'admin.home.index'])->syncRoles([$role1,$role2,$role3,$role4]);
       Permission::create(['name' => 'admin.home.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.home.edit'])->syncRoles([$role1]);
         Permission::create(['name' => 'admin.home.destroy'])->syncRoles([$role1]);
 // relaciones de los roles con los permisos la hago arriba con el metodo assignROLE
    }
}
