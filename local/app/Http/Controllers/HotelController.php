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

    public function getpenhouse()
    {
        return view('pages.penhouse');
    }

    public function gettopfloor()
    {
        return view('pages.topfloor');
    }

    public function getmedium()
    {
        return view('pages.medium');
    }

    public function getpool()
    {
        return view('pages.pool');
    }
}
