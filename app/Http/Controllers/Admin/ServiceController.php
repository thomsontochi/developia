<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreServiceRequest;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(StoreServiceRequest $request)
    {
        try {
            $validated = $request->validated();
            // $validated = $request->validate([
            //     'name' => 'required|string|max:255',
            //     'description' => 'required|string',
            //     'price' => 'nullable|numeric',
            //     'duration' => 'nullable|string',
            //     'category' => 'nullable|string',
            //     'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            //     'is_active' => 'boolean',
            // ]);
    
            // Handle the image upload
            if ($request->hasFile('image')) {
                $imageName = Str::slug($validated['name']) . '-' . time() . '.' . $request->image->extension();
                $request->image->move(public_path('images/services'), $imageName);
                $validated['image'] = 'images/services/' . $imageName;
            }
    
            // Create the service record
            Service::create($validated);
    
            // Log the successful creation
            Log::info('Service created successfully', ['name' => $validated['name']]);
    
            return redirect()->route('services.index')->with('success', 'Service created successfully.');
        } catch (\Exception $e) {
            // Log the error
            Log::error('Failed to create service', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
    
            return redirect()->route('services.create')->withErrors('Failed to create service. Please try again.');
        }
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'nullable|numeric',
            'duration' => 'nullable|string',
            'category' => 'nullable|string',
            'image' => 'nullable|string',
            'is_active' => 'boolean',
        ]);

        $service->update($request->all());

        return redirect()->route('services.index')->with('success', 'Service updated successfully.');
    }

    public function destroy(Service $service)
    {
        if ($service->image) {
            Storage::delete($service->image);
        }
        $service->delete();
        return redirect()->route('services.index')->with('success', 'Service deleted successfully');
    }
}
