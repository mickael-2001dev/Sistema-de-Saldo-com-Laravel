<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library\Messages;

class AdminController extends Controller
{
    public function index()
    {
    	return view('admin.home.index');
    }
}
