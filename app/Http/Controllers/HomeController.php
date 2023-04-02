<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class HomeController extends Controller
{
    public function index()
    {
        dump(true);

        $current = Carbon::now();

        Log::info("Add log " . $current->toDateTimeString());

        return view('welcome');
    }
}