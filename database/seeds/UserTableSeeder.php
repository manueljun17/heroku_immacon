<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $role_user = Role::where('name', 'User')->first();
        $role_admin = Role::where('name', 'Admin')->first();

        $admin = new User();
        $admin->first_name = 'Among';
        $admin->last_name = 'Sonny';
        $admin->email = 'admin@example.com';
        $admin->password = bcrypt('admin');
        $admin->save();
        $admin->roles()->sync( [ 1 ]);

        $user = new User();
        $user->first_name = 'Manuel';
        $user->last_name = 'Manansala';
        $user->email = 'manuel@example.com';
        $user->password = bcrypt('manuel');
        $user->save();
        $user->roles()->sync( [ 1 ]);	
    }
}
