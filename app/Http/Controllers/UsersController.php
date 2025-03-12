<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function showContact()
    {
        return view('iletisim.index'); 
    }
}
