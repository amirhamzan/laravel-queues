<?php

namespace App\Http\Controllers;

use App\Jobs\CreateLog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        CreateLog::dispatch()->delay(now()->addSeconds(15));
        
        return view('welcome');
    }
}
