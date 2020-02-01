<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::get('/sitemap','SitemapController@generate');
    // Your overwrites here
    //    Route::get('/dashboard', '\App\Http\Controllers\Habitat\VoyagerController@index')->name('voyager.dashboard');
       Route::get('/export/donations/all', '\App\Http\Controllers\Habitat\DonationsController@exportAll')->name('donations.export.all');
       Route::get('/export/donations/month', '\App\Http\Controllers\Habitat\DonationsController@exportByMonth')->name('donations.export.month');
});

Route::group(['prefix' => 'payment'], function () {
    Route::post('/process', 'DonationController@submitDonation')->name('donation.store');
    Route::get('/finish', function(){
        return view('client.thank-you');
    })->name('donation.finish');
    Route::get('/unfinish', function(){
        return view('client.pending');
    })->name('donation.unfinish');
    Route::get('/payment/error', function(){
        return view('client.error');
    })->name('donation.error');

});

Route::post('/notification/handler', 'HistoryDonationController@notificationHandler')->name('notification.handler');

// Route Frontend
Route::get('/', 'FrontendController@index')->name('habitat.index');
Route::get('/detail/{type}', 'DonationController@types')->name('types.donasi');
// Route::get('/search', 'ArticleController@searchTopic')->name('search.topic');
Route::get('search', ['as' => 'search', 'uses' => 'ArticleController@searchTopic']);
Route::post('/subscribe', 'FrontendController@subscribe')->name('email.subscribe');

// form donasi
Route::get('/donasi/{type}', 'DonationController@index')->name('form.donasi');


Route::get('/{slug}', 'ArticleController@index')->name('article.detail');
