<?php
use App\Organization;
use Illuminate\Database\Seeder;
class OrganizationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $organization_holyname = new Organization();
        $organization_holyname->name = 'Holy Name';
        $organization_holyname->description = 'Holy Name Organization';
        $organization_holyname->save();

        $organization_lom = new Organization();
        $organization_lom->name = 'Legion of Mary';
        $organization_lom->description = 'Legion of Mary Organization';
        $organization_lom->save();
    }
}
