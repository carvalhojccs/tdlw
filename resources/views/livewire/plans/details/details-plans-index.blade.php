<x-slot name="header">
    <x-breadcrumb.breadcrumb>
        <x-breadcrumb.item :route="route('plans.index')">{{ __('Plans') }}</x-breadcrumb.item>
        <x-breadcrumb.active>{{ __('Details') }}</x-breadcrumb.active>
    </x-breadcrumb.breadcrumb>
</x-slot>
<div class="py-4">
    <div class="mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h1 class="text-slate-700">{{ __("Plan") }}: {{ $plan->name }}</h1>
                <hr class="border-t border-gray-300 py-2">
                <x-primary-button wire:navigate href="{{-- route('plans.create') --}}">{{ __('New detail') }}</x-primary-button>

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg py-2">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    {{ __('Detail') }}
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    {{ __('Action') }}
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($details as $detail)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4">
                                    {{ $detail->name }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
