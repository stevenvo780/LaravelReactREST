<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'ROLE_USER')->first();
        $role_admin = Role::where('name', 'ROLE_ADMIN')->first();

        $user = new User();
        $user->name = "UserA";
        $user->email = "user@user.uno";
        $user->password = bcrypt('query');
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->name = "UserB";
        $user->email = "user@user.dos";
        $user->password = bcrypt('query');
        $user->save();
        $user->roles()->attach($role_admin);
    }
}
