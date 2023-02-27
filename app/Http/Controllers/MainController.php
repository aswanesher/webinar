<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebinarCategory;
use App\Models\Webinar;
use App\Models\Testimonial;

class MainController extends Controller
{
    public function index()
    {
        $category = WebinarCategory::orderBy('id','asc')->get();
        $webinar = Webinar::orderBy('id','desc')->get();
        $testimonial = Testimonial::orderBy('id','desc')->get();
        return view('index', compact('category','webinar','testimonial'));
    }
}
