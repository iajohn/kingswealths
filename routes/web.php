<?php

use Illuminate\Support\Facades\Route;

/*
|---------------------------------------------------------------------------------
| Web Routes -- here is where you can register web routes for your application
|---------------------------------------------------------------------------------
*/

// Route::get('/', function () {
//     return view('welcome');
// });

/*
|--------------------------------------------------------------------------
| 	SITEMAPS
|--------------------------------------------------------------------------
|
*/

    Route::get('sitemap.xml',            'SitemapController@index')->name('sitemap');
    Route::get('sitemap.xml/home',       'SitemapController@home')->name('sitemap.home');
    Route::get('sitemap.xml/about',      'SitemapController@about')->name('sitemap.about');
    Route::get('sitemap.xml/service',    'SitemapController@service')->name('sitemap.service');
    Route::get('sitemap.xml/contact',    'SitemapController@contact')->name('sitemap.contact');


/*
|--------------------------------------------------------------------------
| 	HOME
|--------------------------------------------------------------------------
|
*/	

    Route::get('/', [
        'uses'	=> 'WebsiteController@index',
        'as'	=> 'home'
    ]);


/*
|--------------------------------------------------------------------------
| 	ABOUT US
|--------------------------------------------------------------------------
|
*/	

    Route::get('/about', [
        'uses'	=> 'WebsiteController@about',
        'as'	=> 'about'
    ]);	

/*
|--------------------------------------------------------------------------
| 	OUR SERVICES
|--------------------------------------------------------------------------
|
*/	

    Route::get('/services', [
        'uses'	=> 'WebsiteController@services',
        'as'	=> 'services'
    ]);

/*
|--------------------------------------------------------------------------
| 	CONTACT US
|--------------------------------------------------------------------------
|
*/	
    Route::get('/contact', [
        'uses'	=> 'WebsiteController@contact',
        'as'	=> 'contact'
    ]);

    Route::post('/contact', [
        'uses'	=> 'WebsiteController@contactPost',
        'as'	=> 'contact.send'
    ]);



/*
|--------------------------------------------------------------------------
| 	TC
|--------------------------------------------------------------------------
|
*/	

