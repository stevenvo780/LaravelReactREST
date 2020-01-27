<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = "ROLE_USER";
        $role->save();

        $role = new Role();
        $role->name = "ROLE_ADMIN";
        $role->save();
    }
}
