<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use user;
use View;
class aboutusController extends Controller
{
    //
    public function index()
    {
        
        return View::make('about_us.index');
    }
}
