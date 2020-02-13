<?php

use App\Campaign;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Donation;

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::get('/sitemap','SitemapController@generate');
    // Your overwrites here
        Route::get('/', function(){
            if(Auth::check()){
                $date = \Carbon\Carbon::now();
                $grandTotal = Donation::where(['status' => 'success'])->sum('amount');
                $labelThisMonth = $date->format('F Y');
                $labelLastMonth = $date->subMonth()->format('F Y');
                $prevmonth = date('m', strtotime('-1 months'));
                $totalThisMonth = Donation::where(['status' => 'success'])->whereMonth('created_at', date('m'))->sum('amount');
                $totalLastMonth = Donation::where(['status' => 'success'])->whereMonth('created_at', $prevmonth)->sum('amount');
                return view('vendor.voyager.index', compact('grandTotal','labelLastMonth', 'labelThisMonth', 'totalLastMonth', 'totalThisMonth'));
            }else{
                return redirect('admin/login');
            }
        })->name('voyager.dashboard');
       Route::get('/export/donations/all', '\App\Http\Controllers\Habitat\DonationsController@exportAll')->name('donations.export.all');
       Route::post('/export/donations/month', '\App\Http\Controllers\Habitat\DonationsController@exportByMonth')->name('donations.export.month');
       Route::get('/export/campaigns/all', '\App\Http\Controllers\Habitat\CampaignsController@exportAll')->name('campaigns.export.all');
       Route::get('/campaign','FrontendController@campaign');
});

Route::group(['prefix' => 'payment'], function () {
    Route::post('/process', 'DonationController@submitDonation')->name('donation.store');
    // Route::get('/finish/{slider_id?}/{uuid?}', function($slider_id, $uuid){
    //     $campaign = Campaign::where('uuid', $uuid)->first();
    //     return view('client.thank-you', compact('uuid', 'campaign'));
    // })->name('donation.finish');

    Route::get('/finish/{slider_id?}/{uuid?}', 'CampaignController@process')->name('donation.finish');

    Route::get('/unfinish', function(){
        return view('client.pending');
    })->name('donation.unfinish');
    Route::get('/error', function(){
        return view('client.error');
    })->name('donation.error');

});

Route::get('/campaign/{uuid}', function($uuid){
    return view('client.campaign-page', compact('uuid'));
})->name('campaign.page');

Route::post('/generate/gif', 'CampaignController@process')->name('generate.gif');
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
Route::get('/blog/{slug}', 'ArticleController@index')->name('article.detail');
