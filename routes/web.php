<?php
Route::group([
    'prefix' => 'routes', 'as' => 'routes::',
    'middleware' => ['web', config('routes.middleware', 'auth')],
    'namespace' => '\Routes\Http\Controllers'], function () {

    Route::get('/{theme_select?}', ['uses' => 'DashboardController@index', 'as' => 'dashboard.index']);

});
