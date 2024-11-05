<x-slot name="header">
    <x-breadcrumb.breadcrumb>
        <<x-breadcrumb.item :route="route('plans.index')">{{ __('Plans') }}</x-breadcrumb.item>
            <x-breadcrumb.active>{{ __('Show') }}</x-breadcrumb.active>
    </x-breadcrumb.breadcrumb>
</x-slot>
<div class="py-4">
    <div class="mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
            <div class="relative z-0 w-full mb-5 group">
                <span
                    class="block py-2 px-0 w-full text-sm text-gray-900 border-0 border-b-2 appearance-none focus:outline-none focus:border-blue-600">
                    {{ $plan->name }}
                </span>
                <label
                    class="absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600">
                    {{ __('Name') }}
                </label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <span
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 border-0 border-b-2 focus:outline-none focus:border-blue-600">
                    {{ $plan->price }}
                </span>
                <label
                    class="absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600">
                    {{ __('Price') }}
                </label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <span
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 border-0 border-b-2 focus:outline-none focus:border-blue-600">
                    {{ $plan->description }}
                </span>
                <label
                    class="absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600">
                    {{ __('Description') }}
                </label>
            </div>
        </div>
    </div>

    <div class="flex justify-between py-4 mx-auto sm:px-6 lg:px-8">
        <x-buttons.action-button action="back" wire:navigate href="{{ route('plans.index') }}">
            {{ __('Voltar') }}
        </x-buttons.action-button>
        <x-buttons.action-button action="edit" wire:navigate href="{{--  --}}">
            {{ __('Editar') }}
        </x-buttons.action-button>

        <x-buttons.action-button action="delete" wire:navigate href="{{--  --}}">
            {{ __('Deletar') }}
        </x-buttons.action-button>

    </div>
</div>
