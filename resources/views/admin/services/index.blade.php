<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Developia\'s Services') }}
        </h2>
        <a href="{{ route('services.create') }}" class="inline-flex items-center mt-5 px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-800 focus:outline-none focus:border-indigo-900 focus:ring ring-indigo-300 disabled:opacity-25 transition ease-in-out duration-150">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
            </svg>
            Create New Service
        </a>
    </x-slot>

    <div class="py-12 bg-gray-100 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($services as $service)
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:scale-105">
                        <img src="{{ asset($service->image) }}" alt="{{ $service->name }}" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">{{ $service->name }}</h3>
                            <p class="text-gray-600 dark:text-gray-300 mb-4">{{ Str::limit($service->description, 100) }}</p>
                            <div class="flex justify-between items-center">
                                <span class="text-indigo-600 dark:text-indigo-400 font-bold">${{ number_format($service->price, 2) }}</span>
                                <span class="text-sm text-gray-500 dark:text-gray-400">{{ $service->duration }}</span>
                            </div>
                            <div class="mt-4">
                                <span class="inline-block bg-gray-200 dark:bg-gray-700 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 dark:text-gray-300 mr-2">{{ $service->category }}</span>
                                @if($service->is_active)
                                    <span class="inline-block bg-green-200 dark:bg-green-700 rounded-full px-3 py-1 text-sm font-semibold text-green-700 dark:text-green-300">Active</span>
                                @else
                                    <span class="inline-block bg-red-200 dark:bg-red-700 rounded-full px-3 py-1 text-sm font-semibold text-red-700 dark:text-red-300">Inactive</span>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>