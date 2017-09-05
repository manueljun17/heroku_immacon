<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ConfigTableSeeder::class);
        $this->call(ContactTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(AboutTableSeeder::class);
        $this->call(OrganizationTableSeeder::class);
        $this->call(ParishofficerTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        
    }
}
