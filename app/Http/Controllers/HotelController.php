<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function getroom()
    {
    	return view('pages.room');
    }

    public function getwelcome()
    {
    	return view('welcome');
    }

    public function getmap()
    {
    	return view('pages.map');
    }

    public function getcontact()
    {
        return view('pages.contact');
    }
}
