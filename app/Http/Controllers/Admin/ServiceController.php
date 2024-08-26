<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreServiceRequest;
use Intervention\Image\Laravel\Facades\Image;

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

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = Str::slug($validated['name']) . '-' . time() . '.' . $image->getClientOriginalExtension();
                
                // Create and resize the image
                $resizedImage = Image::read($image)->cover(640, 640);
                $destinationPath = 'images/services/';
                
                // Save the image
                Storage::disk('public')->put($destinationPath . $imageName, $resizedImage->encode());
                
                $validated['image'] = $destinationPath . $imageName;
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

    public function update(StoreServiceRequest $request, Service $service)
    {
        // dd($request);
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            // Delete old image
            if ($service->image) {
                Storage::disk('public')->delete($service->image);
            }

            $image = $request->file('image');
            $imageName = Str::slug($validated['name']) . '-' . time() . '.' . $image->getClientOriginalExtension();
            
            // Create and resize the image
            $resizedImage = Image::read($image)->cover(640, 640);
            $destinationPath = 'images/services/';
            
            // Save the image
            Storage::disk('public')->put($destinationPath . $imageName, $resizedImage->encode());
            
            $validated['image'] = $destinationPath . $imageName;
        } elseif ($request->boolean('remove_image')) {
            // Delete image if remove_image is checked
            if ($service->image) {
                Storage::disk('public')->delete($service->image);
            }
            $validated['image'] = null;
        }

        $service->update($validated);
        return redirect()->route('services.index')->with('success', 'Service updated successfully.');
    }

    public function destroy(Service $service)
    {
        if ($service->image) {
            Storage::disk('public')->delete($service->image);
        }
        $service->delete();
        return redirect()->route('services.index')->with('success', 'Service deleted successfully');
    }
}