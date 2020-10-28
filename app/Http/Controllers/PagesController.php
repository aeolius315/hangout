<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        return view('pages.index');
    }

    public function events(){
        $data = array(
            'title' => 'Events',
            'events' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.events')->with($data);
    }
}
