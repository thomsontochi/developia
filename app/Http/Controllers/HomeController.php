<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::take(6)->get(); 
        $services = Service::where('is_active', true)->get();
        return view('home', compact('services', 'projects'));
    }
}
