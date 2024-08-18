@props(['service' => null, 'action', 'method' => 'POST'])

<form action="{{ $action }}" method="{{ $method === 'GET' ? 'GET' : 'POST' }}" enctype="multipart/form-data">
    @csrf
    @if($method !== 'POST')
        @method($method)
    @endif
    <div class="grid grid-cols-1 gap-6">
        <div>
            <x-label for="name" :value="__('Name')" />
            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $service?->name)" required autofocus maxlength="255" />
        </div>
        <div>
            <x-label for="description" :value="__('Description')" />
            <textarea id="description" name="description" rows="4" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required maxlength="1000">{{ old('description', $service?->description) }}</textarea>
        </div>
        <div>
            <x-label for="price" :value="__('Price')" />
            <x-input id="price" class="block mt-1 w-full" type="number" name="price" :value="old('price', $service?->price)" required step="0.01" min="0" max="999999.99" />
        </div>
        <div>
            <x-label for="duration" :value="__('Duration')" />
            <x-input id="duration" class="block mt-1 w-full" type="text" name="duration" :value="old('duration', $service?->duration)" pattern="^(?:\d+[hm])+$" title="Enter duration in format like '2h30m'" />
        </div>
        <div>
            <x-label for="category" :value="__('Category')" />
            <x-input id="category" class="block mt-1 w-full" type="text" name="category" :value="old('category', $service?->category)" required maxlength="100" />
        </div>
        <div>
            <x-label for="image" :value="__('Image')" />
            <input id="image" class="block mt-1 w-full" type="file" name="image" accept="image/*" />
            @if($service && $service->image)
                <div class="mt-2">
                    <img src="{{ asset($service->image) }}" alt="{{ $service->name }}" class="w-32 h-32 object-cover">
                    <label for="remove_image" class="inline-flex items-center mt-2">
                        <input id="remove_image" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remove_image" value="1">
                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remove current image') }}</span>
                    </label>
                </div>
            @endif
        </div>
        <div>
            <label for="is_active" class="inline-flex items-center">
                <input id="is_active" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="is_active" value="1" {{ old('is_active', $service?->is_active) ? 'checked' : '' }}>
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Active') }}</span>
            </label>
        </div>
        <div class="flex items-center justify-end mt-4">
            <x-button class="ml-4">
                {{ $service ? __('Update Service') : __('Create Service') }}
            </x-button>
        </div>
    </div>
</form>