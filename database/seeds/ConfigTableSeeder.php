<?php
use App\Config;
use Illuminate\Database\Seeder;

class ConfigTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $config = new Config();
        $config->key = 'site_title';
        $config->value = 'ImmaconAngelesCityPH CHURCH';
        $config->save();

        $config_sched = new Config();
        $config_sched->key = 'mass_schedule';
        $config_sched->value = '<p>
                    <b>Monday, Tuesday, Thursday and Friday</b> <br>
                    7:00 AM <br>
                    <br>
                    <b>Wednesday and Saturday</b> <br>
                    7:00 AM and 5:30 PM <br>
                    <br>
                    <b>Sunday</b><br> 
                    5:30AM, 7:00AM, 8:30AM, 10:00AM, 4:00PM, 5:30PM, 7:00PM and 8:15PM<br>
                    </p>';
        $config_sched->save();

        $config_footer = new Config();
        $config_footer->key = 'footer';
        $config_footer->value = '© Immaculate Conception Parish, 2017';
        $config_footer->save();
    }
}
