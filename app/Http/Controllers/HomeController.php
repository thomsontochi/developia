<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::limit(6)->get(); 
        $services = Service::where('is_active', true)->limit(6)->get();
        $testimonials = Testimonial::where('is_active', true)->get();
        return view('home', compact('services', 'projects', 'testimonials'));
    }
}
