<?php

namespace wonders\Http\Controllers;

use Illuminate\Http\Request;

use wonders\Http\Requests;
use wonders\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
    public function about ()
    {
    	$myself = 'Krishnaraj KR';
		$people = ['Sachin Tendulkar', 'MS Dhoni', 'Rahul Dravid'];

		return view('pages.about', compact('myself', 'people'));
    }
}
