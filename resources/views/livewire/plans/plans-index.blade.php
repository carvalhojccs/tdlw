<x-slot name="header">
    <x-breadcrumb.breadcrumb>
        <x-breadcrumb.active>{{ __('Plans') }}</x-breadcrumb.active>
    </x-breadcrumb.breadcrumb>
</x-slot>

<div class="py-4">

    <div x-data="{ showToast: @js($showToast), toastMessage: @js($toastMessage) }" x-init="if (showToast) { setTimeout(() => showToast = false, 5000); }">
        <template x-if="showToast">
            <div class="fixed top-0 right-0 flex items-center justify-between p-4 m-4 text-white bg-green-500 rounded shadow">
                <span x-text="toastMessage"></span>
                <button @click="showToast = false" class="ml-4 font-bold text-white">&times;</button>
            </div>
        </template>
    </div>

    <div class="mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <x-primary-button wire:navigate href="{{ route('plans.create') }}">{{ __('New plan') }}</x-primary-button>

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg py-2">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    {{ __('Name') }}
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        {{ __('URL') }}
                                        <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                            </svg></a>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        {{ __('Description') }}
                                        <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                            </svg></a>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        {{ __('Price') }}
                                        <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                            </svg></a>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($plans as $plan)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $plan->name }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $plan->url }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $plan->description }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ Number::currency($plan->price, 'BRL') }}
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <div class="flex justify-between">
                                        <a wire:navigate href="{{ route('plans.show', $plan->id) }}"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><x-icons.eye-on />
                                        </a>
                                        <a wire:navigate href="{{ route('details.plans.index', $plan->id) }}"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><x-icons.manage-search />
                                        </a>
                                    </div>

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
