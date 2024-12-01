<x-slot name="header">
    <x-breadcrumb.breadcrumb>
        <x-breadcrumb.item route="route('plans.index')" >{{ __('Plans') }}</x-breadcrumb.item>
        <x-breadcrumb.active>{{ __('Create') }}</x-breadcrumb.active>
    </x-breadcrumb.breadcrumb>
</x-slot>
<div class="py-4">

<form class="mx-4" wire:submit='save'>
    <div class="relative z-0 w-full mb-5 group">
        <input type="text" wire:model='form.name' id="name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "/>
        <label for="name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">{{ __('Name') }}</label>
        <div>
            @error('form.name') <span class="text-sm text-red-600 space-y-1">{{ $message }}</span> @enderror
        </div>
    </div>
    <div class="relative z-0 w-full mb-5 group">
        <input type="text" wire:model='form.price' id="price" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "/>
        <label for="price" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">{{ __('Price') }}</label>
        <div>
            @error('form.price') <span class="text-sm text-red-600 space-y-1">{{ $message }}</span> @enderror
        </div>
    </div>
    <div class="relative z-0 w-full mb-5 group">
        <textarea wire:model='form.description' id="description" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " ></textarea>
    <label for="description" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">{{ __('Description') }}</label>
    <div>
        @error('form.description') <span class="text-sm text-red-600 space-y-1">{{ $message }}</span> @enderror
    </div>
    </div>

    <x-primary-button>{{ __('Save') }}</x-primary-button>
  </form>

</div>
