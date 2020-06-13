<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
     public function bryuki(Request $request)
    {
        return view('bryuki');
    }
	 public function footbolki(Request $request)
    {
        return view('footbolki');
    }  
	 public function index(Request $request)
    {
        return view('index');
    }
	public function remni(Request $request)
    {
        return view('remni');
    }
	public function sumki(Request $request)
    {
        return view('sumki');
    }
	public function zima(Request $request)
    {
        return view('zima');
    }
	public function krossovki(Request $request)
    {
        return view('krossovki');
    }
	public function getBaskets(Request $request)
    {
        return (new BasketController())->show();
    }
}
