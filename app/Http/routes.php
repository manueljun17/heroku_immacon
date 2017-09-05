<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::get('/', 'HomeController@index')->name('main');
});
//Auth    
// Route::auth();
// Route::get('/login', [
//     'uses' => 'Auth\AuthController@showLoginForm',
//     'as' => 'login.show'
// ]);
Route::post('/login', [
    'uses' => 'Auth\AuthController@login',
    'as' => 'login'
]);
Route::get('/logout', [
    'uses' => 'Auth\AuthController@logout',
    'as' => 'logout'
]);
// Route::post('/register', [
//     'uses' => 'Auth\AuthController@register',
//     'as' => 'register'
// ]);
// Route::get('/register', [
//     'uses' => 'Auth\AuthController@showRegistrationForm',
//     'as' => 'register.show'
// ]);

//Admin
Route::get('/admin', [
    'uses' => 'Auth\AuthController@showLoginForm',
    'as' => 'admin'
]);
//ParishOfficers
Route::get('/admin/parishofficers/autocomplete', [
    'uses' => 'ParishofficersController@autocomplete', 
    'as' => 'admin.parishofficers.autocomplete'
]);
 Route::post('/admin/parishofficers', [
    'uses' => 'ParishofficersController@store',
    'as' => 'admin.parishofficers.store',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
Route::get('/admin/parishofficers', [
    'uses' => 'ParishofficersController@index',
    'as' => 'admin.parishofficers',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
Route::get('/admin/parishofficers/create', [
    'uses' => 'ParishofficersController@create',
    'as' => 'admin.parishofficers.create',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
Route::get('/admin/parishofficers/{parishofficers}', [
    'uses' => 'ParishofficersController@show',
    'as' => 'admin.parishofficers.show',
    'middleware' => 'roles',
    'roles' => ['Admin']
]); 
Route::patch('/admin/parishofficers/{parishofficers}', [
    'uses' => 'ParishofficersController@update',
    'as' => 'admin.parishofficers.update',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
Route::delete('/admin/parishofficers/{parishofficers}', [
    'uses' => 'ParishofficersController@destroy',
    'as' => 'admin.parishofficers.destroy',
    'middleware' => 'roles',
    'roles' => ['Admin']
]); 
Route::get('/admin/parishofficers/{parishofficers}/edit', [
    'uses' => 'ParishofficersController@edit',
    'as' => 'admin.parishofficers.edit',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);




//Users
Route::get('/admin/users/autocomplete', [
    'uses' => 'UsersController@autocomplete', 
    'as' => 'admin.users.autocomplete'
]);
 Route::post('/admin/users', [
    'uses' => 'UsersController@store',
    'as' => 'admin.users.store',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
Route::get('/admin/users', [
    'uses' => 'UsersController@index',
    'as' => 'admin.users',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
Route::get('/admin/users/create', [
    'uses' => 'UsersController@create',
    'as' => 'admin.users.create',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
Route::get('/admin/users/{users}', [
    'uses' => 'UsersController@show',
    'as' => 'admin.users.show',
    'middleware' => 'roles',
    'roles' => ['Admin']
]); 
Route::patch('/admin/users/{users}', [
    'uses' => 'UsersController@update',
    'as' => 'admin.users.update',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
Route::delete('/admin/users/{users}', [
    'uses' => 'UsersController@destroy',
    'as' => 'admin.users.destroy',
    'middleware' => 'roles',
    'roles' => ['Admin']
]); 
Route::get('/admin/users/{users}/edit', [
    'uses' => 'UsersController@edit',
    'as' => 'admin.users.edit',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
//About
Route::get('/admin/about', [
    'uses' => 'AboutController@index',
    'as' => 'admin.about',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
Route::get('/admin/about/{about}/edit', [
    'uses' => 'AboutController@edit',
    'as' => 'admin.about.edit',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
Route::patch('/admin/about/{about}', [
    'uses' => 'AboutController@update',
    'as' => 'admin.about.update',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);

//Contact
Route::get('/admin/contact', [
    'uses' => 'ContactController@index',
    'as' => 'admin.contact',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
Route::get('/admin/contact/{contact}/edit', [
    'uses' => 'ContactController@edit',
    'as' => 'admin.contact.edit',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
Route::patch('/admin/contact/{contact}', [
    'uses' => 'ContactController@update',
    'as' => 'admin.contact.update',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);

//Config
Route::get('/admin/configs/autocomplete', [
    'uses' => 'ConfigController@autocomplete', 
    'as' => 'admin.configs.autocomplete'
]);
Route::post('/admin/configs', [
    'uses' => 'ConfigController@store',
    'as' => 'admin.configs.store',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
Route::get('/admin/configs', [
    'uses' => 'ConfigController@index',
    'as' => 'admin.configs',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
Route::get('/admin/configs/create', [
    'uses' => 'ConfigController@create',
    'as' => 'admin.configs.create',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
Route::get('/admin/configs/{config}', [
    'uses' => 'ConfigController@show',
    'as' => 'admin.configs.show',
    'middleware' => 'roles',
    'roles' => ['Admin']
]); 
Route::patch('/admin/configs/{config}', [
    'uses' => 'ConfigController@update',
    'as' => 'admin.configs.update',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
Route::delete('/admin/configs/{config}', [
    'uses' => 'ConfigController@destroy',
    'as' => 'admin.configs.destroy',
    'middleware' => 'roles',
    'roles' => ['Admin']
]); 
Route::get('/admin/configs/{config}/edit', [
    'uses' => 'ConfigController@edit',
    'as' => 'admin.configs.edit',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);

//Events
Route::get('/admin/events/autocomplete', [
    'uses' => 'EventsController@autocomplete', 
    'as' => 'admin.events.autocomplete'
]);
Route::post('/admin/events', [
    'uses' => 'EventsController@store',
    'as' => 'admin.events.store',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
Route::get('/admin/events', [
    'uses' => 'EventsController@index',
    'as' => 'admin.events',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
Route::get('/admin/events/create', [
    'uses' => 'EventsController@create',
    'as' => 'admin.events.create',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
Route::get('/admin/events/{events}', [
    'uses' => 'EventsController@show',
    'as' => 'admin.events.show',
    'middleware' => 'roles',
    'roles' => ['Admin']
]); 
Route::patch('/admin/events/{events}', [
    'uses' => 'EventsController@update',
    'as' => 'admin.events.update',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
Route::delete('/admin/events/{events}', [
    'uses' => 'EventsController@destroy',
    'as' => 'admin.events.destroy',
    'middleware' => 'roles',
    'roles' => ['Admin']
]); 
Route::get('/admin/events/{events}/edit', [
    'uses' => 'EventsController@edit',
    'as' => 'admin.events.edit',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);

//Organizations
Route::get('/admin/organizations/autocomplete', [
    'uses' => 'OrganizationsController@autocomplete', 
    'as' => 'admin.organizations.autocomplete'
]);
Route::post('/admin/organizations', [
    'uses' => 'OrganizationsController@store',
    'as' => 'admin.organizations.store',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
Route::get('/admin/organizations', [
    'uses' => 'OrganizationsController@index',
    'as' => 'admin.organizations',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
Route::get('/admin/organizations/create', [
    'uses' => 'OrganizationsController@create',
    'as' => 'admin.organizations.create',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
Route::get('/admin/organizations/{organizations}', [
    'uses' => 'OrganizationsController@show',
    'as' => 'admin.organizations.show',
    'middleware' => 'roles',
    'roles' => ['Admin']
]); 
Route::patch('/admin/organizations/{organizations}', [
    'uses' => 'OrganizationsController@update',
    'as' => 'admin.organizations.update',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
Route::delete('/admin/organizations/{organizations}', [
    'uses' => 'OrganizationsController@destroy',
    'as' => 'admin.organizations.destroy',
    'middleware' => 'roles',
    'roles' => ['Admin']
]); 
Route::get('/admin/organizations/{organizations}/edit', [
    'uses' => 'OrganizationsController@edit',
    'as' => 'admin.organizations.edit',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);


/**
*@method Public Routes
*
*/


//Event
Route::get('/events/autocomplete', [
    'uses' => 'EventsController@autocomplete', 
    'as' => 'events.autocomplete'
]);

Route::get('/events/{events}', [
    'uses' => 'EventsController@show',
    'as' => 'events.show'
]); 
Route::get('/events', [
    'uses' => 'EventsController@index',
    'as' => 'events'
]);
// Route::get('/events/create', [
//     'uses' => 'EventsController@create',
//     'as' => 'events.create'
// ]);
// Route::post('/events', [
//     'uses' => 'EventsController@store',
//     'as' => 'events.store'
// ]);
// Route::patch('/events/{events}', [
//     'uses' => 'EventsController@update',
//     'as' => 'events.update'
// ]);
// Route::delete('/events/{events}', [
//     'uses' => 'EventsController@destroy',
//     'as' => 'events.destroy'
// ]); 
// Route::get('/events/{events}/edit', [
//     'uses' => 'EventsController@edit',
//     'as' => 'events.edit'
// ]);

//Organizations
Route::get('/organizations/autocomplete', [
    'uses' => 'OrganizationsController@autocomplete', 
    'as' => 'organizations.autocomplete'
]);
Route::get('/organizations', [
    'uses' => 'OrganizationsController@index',
    'as' => 'organizations'
]);
Route::get('/organizations/{organizations}', [
    'uses' => 'OrganizationsController@show',
    'as' => 'organizations.show'
]); 
// Route::post('/organizations', [
//     'uses' => 'OrganizationsController@store',
//     'as' => 'organizations.store'
// ]);

// Route::get('/organizations/create', [
//     'uses' => 'OrganizationsController@create',
//     'as' => 'organizations.create'
// ]);

// Route::patch('/organizations/{organizations}', [
//     'uses' => 'OrganizationsController@update',
//     'as' => 'organizations.update'
// ]);
// Route::delete('/organizations/{organizations}', [
//     'uses' => 'OrganizationsController@destroy',
//     'as' => 'organizations.destroy'
// ]); 
// Route::get('/organizations/{organizations}/edit', [
//     'uses' => 'OrganizationsController@edit',
//     'as' => 'organizations.edit'
// ]);



//ParishOfficers
Route::get('/parishofficers/autocomplete', [
    'uses' => 'ParishofficersController@autocomplete', 
    'as' => 'parishofficers.autocomplete'
]);
Route::get('/parishofficers', [
    'uses' => 'ParishofficersController@index',
    'as' => 'parishofficers'
]);
Route::get('/parishofficers/{parishofficers}', [
    'uses' => 'ParishofficersController@show',
    'as' => 'parishofficers.show'
]); 
//  Route::post('/parishofficers', [
//     'uses' => 'ParishofficersController@store',
//     'as' => 'parishofficers.store'
// ]);


// Route::get('/parishofficers/create', [
//     'uses' => 'ParishofficersController@create',
//     'as' => 'parishofficers.create'
// ]);
// Route::patch('/parishofficers/{parishofficers}', [
//     'uses' => 'ParishofficersController@update',
//     'as' => 'parishofficers.update'
// ]);
// Route::delete('/parishofficers/{parishofficers}', [
//     'uses' => 'ParishofficersController@destroy',
//     'as' => 'parishofficers.destroy'
// ]); 
// Route::get('/parishofficers/{parishofficers}/edit', [
//     'uses' => 'ParishofficersController@edit',
//     'as' => 'parishofficers.edit'
// ]);


////////
//Config
// Route::get('/config/autocomplete', [
//     'uses' => 'ConfigController@autocomplete', 
//     'as' => 'config.autocomplete'
// ]);

// Route::get('/config/{config}', [
//     'uses' => 'ConfigController@show',
//     'as' => 'config.show'
// ]); 
// Route::get('/config', [
//     'uses' => 'ConfigController@index',
//     'as' => 'config'
// ]);
/////////
//About
Route::get('/about', [
    'uses' => 'AboutController@index',
    'as' => 'about'
]);
//Contact
Route::get('/contact', [
    'uses' => 'ContactController@index',
    'as' => 'contact'
]);