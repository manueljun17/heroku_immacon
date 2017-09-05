<?php
use App\Contact;
use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact = new Contact();
        $contact->cell_number = '09087654321';
        $contact->phone_number = '  (045) 322 2149 ';
        $contact->address = 'Sta Maria Village II Balibago Angeles City';
        $contact->email_address = 'immacon@gmail.com';
        $contact->account_name = 'immacon';
        $contact->account_number = '12345';
        $contact->image_banner = 'img/tmp/firstbanner.jpg';
        $contact->save();
    }
}
