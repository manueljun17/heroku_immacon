<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Config;
use App\Contact;
use Illuminate\Support\Facades\Schema;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (Schema::hasTable('configs'))
        {
            $myconfig = [];
            $configs = Config::all();
            foreach( $configs as $config ) {
                $myconfig[$config->key] =$config->value; 
            }
           
            View::share('general_info',$myconfig);
        }
        if (Schema::hasTable('contacts'))
        {
            $mycontact = [];
            $contacts = Contact::all();
            foreach( $contacts as $contact) {
                $mycontact = $contact;
            }
            View::share('contact_info',$mycontact);
        }
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
