<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ isset($testimonial) ? __('Edit Testimonial') : __('Create Testimonial') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ isset($testimonial) ? route('testimonials.update', $testimonial->id) : route('testimonials.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        @if(isset($testimonial))
                            @method('PUT')
                        @endif

                        <div>
                            <x-label for="name" :value="__('Name')" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $testimonial->name ?? '')" required autofocus />
                        </div>

                        <div>
                            <x-label for="position" :value="__('Position')" />
                            <x-input id="position" class="block mt-1 w-full" type="text" name="position" :value="old('position', $testimonial->position ?? '')" />
                        </div>

                        <div>
                            <x-label for="content" :value="__('Content')" />
                            <textarea id="content" name="content" rows="4" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>{{ old('content', $testimonial->content ?? '') }}</textarea>
                        </div>

                        <div>
                            <x-label for="image" :value="__('Image')" />
                            <input id="image" type="file" name="image" class="block mt-1 w-full">
                            @if(isset($testimonial) && $testimonial->image)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/' . $testimonial->image) }}" alt="Current Image" class="max-w-xs">
                                </div>
                            @endif
                        </div>

                        <div>
                            <label for="is_active" class="inline-flex items-center">
                                <input id="is_active" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="is_active" value="1" {{ old('is_active', $testimonial->is_active ?? true) ? 'checked' : '' }}>
                                <span class="ml-2 text-sm text-gray-600">{{ __('Active') }}</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ isset($testimonial) ? __('Update Testimonial') : __('Create Testimonial') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>