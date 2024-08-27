<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $servicesCount = Service::count();
        $projectsCount = Project::count();
        $contactsCount = Contact::count();

        $latestServices = Service::latest()->take(5)->get();
        $latestProjects = Project::latest()->take(5)->get();
        $recentContacts = Contact::latest()->take(10)->get();

        return view('dashboard', compact(
            'servicesCount',
            'projectsCount',
            'contactsCount',
            'latestServices',
            'latestProjects',
            'recentContacts'
        ));
    }
}
