<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = "Laravel Tutorial";
        return view ('index')->with('title',$title);
    }
    public function services() {
        $services = array(
            'services' => ['Web Design' , 'Programming', 'SEO']
        );
        return view ('services')->with($services);
        
    }
    public function about() {
        $data = array(
            'title' => "About us",
        );
        return view ('about') -> with($data);
    }
}

