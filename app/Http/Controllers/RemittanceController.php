<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class RemittanceController extends Controller
{
    public function index()
    {
        if ( Auth::check() ) {
            return view("articles.remittance");
        } else {
            return back()->with('flash_message', 'ログインされていません');;
        }
    }
}
