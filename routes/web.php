<?php
Route::group([
    'prefix' => 'routes', 'as' => 'routes::',
    'middleware' => ['web', config('routes.middleware', 'auth')],
    'namespace' => '\ROUTE\Http\Controllers'], function () {

    Route::get('/{theme?}', ['uses' => 'DashboardController@index', 'as' => 'dashboard.index']);

});
