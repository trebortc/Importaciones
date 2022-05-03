<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = [
            //rol user
            'view-user',
            'create-user',
            'edit-user',
            'delete-user',
            //rol table
            'view-rol',
            'create-rol',
            'edit-rol',
            'delete-rol',
            //rol course
            'view-course',
            'create-course',
            'edit-course',
            'delete-course',
        ];

        foreach($permisos as $permiso)
        {
            Permission::create(['name'=>$permiso]);
        }

    }
}
