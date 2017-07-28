<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
 // Creating new todo
	public function new() {

		return view('new');
	}
}
