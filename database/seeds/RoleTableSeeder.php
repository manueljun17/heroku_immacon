<?php
use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     

        $role_admin = new Role();
        $role_admin->name = 'Admin';
        $role_admin->description = 'Admin';
        $role_admin->save();

        // $role_user = new Role();
        // $role_user->name = 'User';
        // $role_user->description = 'User';
        // $role_user->save();
    }
}
