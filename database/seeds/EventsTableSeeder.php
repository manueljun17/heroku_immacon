<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Event;
class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $event = new Event();
        $event->user_id = 1;
        $event->title = 'Bible Study';
        $event->body = 'Bible Study on ImmaconAngelesCityPH';
        $event->event_location = 'Sta Maria Village II Balibago Angeles City, Philippines';
        $event->event_date = Carbon::now();
        $event->save();
    }
}
