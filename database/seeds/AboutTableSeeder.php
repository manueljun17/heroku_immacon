<?php


use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'mission' => "Over the past years, we have seen God do amazing things through ImmaconAngelesCityPH church to change lives in our community, our nation, and around the world. We are blown away at how God continues to strengthen and build the church and use us as a body of believers to bring the good news of the Gospel to people who need Jesus!",
            'vision' =>"This year we unite around the calling to be Christ's hands extended by loving with extravagance, serving with genuineness, and welcoming people home.",
            'history' =>"The Immaculate Conception, according to the teaching of the Catholic Church, was the conception of the Blessed Virgin Mary in the womb of her mother, Saint Anne, free from original sin by virtue of the foreseen merits of her son Jesus Christ. The Catholic Church teaches that Mary was conceived by normal biological means, but God acted upon her soul at the time of her conception.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
