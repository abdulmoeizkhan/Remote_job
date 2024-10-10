<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScrapperController extends Controller
{
    public function linkedin() {
        return view('admin.scrapper.linkedin');
    }
    
    public function indeed() {
        return view('admin.scrapper.indeed');
    }
    
    public function scrape(Request $request) {
        dd($request->post());
    }
}
