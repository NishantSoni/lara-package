<?php 

Route::get('timezones/{timezone}', function(){
	echo "asfsdf";
});

Route::group(['namespace' => 'ArtisanRemover\Http\Controllers'], function()
{
    Route::get('test', ['uses' => 'TestController@test']);
    Route::get('home', ['uses' => 'TestController@home']);
});


?>