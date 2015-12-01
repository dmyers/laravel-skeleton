<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display the home page.
     *
     * @return View
     */
    public function getIndex()
    {
        return view('home/index');
    }
}
