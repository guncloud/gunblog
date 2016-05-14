<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DashboardController extends Controller
{
    
	public function index()
	{
		$title = 'Dashboard';

		return view('dashboard.index', compact('title'));
	}

}
