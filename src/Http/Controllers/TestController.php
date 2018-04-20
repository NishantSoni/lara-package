<?php

namespace ArtisanRemover\Http\Controllers;

use App\Http\Controllers\Controller;

class TestController extends Controller
{
	public function test()
	{
		echo "welcome in the contorller"; exit;
	}

	public function home()
	{
		echo "welcome in the Home contorller"; exit;
	}
    
}