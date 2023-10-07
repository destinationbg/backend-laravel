<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('navigation.regions') }}
        </h1>

        <a href="{{ route('regions.create') }}" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-base px-4 py-2 text-center inline-flex items-center mr-2">
            <span>{{ __('button.create') }}</span>
        </a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                @if (!$regions->isEmpty())
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 ">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        {{ __('table.title') }}
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        {{ __('table.slug') }}
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        {{ __('table.color') }}
                                    </th>
                                    <th scope="col" class="px-6 py-3"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($regions as $region)
                                    <tr class="bg-white @if (!$loop->last) border-b @endif">
                                        <td scope="row" class="px-6 py-4 font-medium text-blue-600 whitespace-nowrap">
                                            <a href="{{ route('regions.show', $region) }}">{{ $region->title }}</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $region->slug }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-2 font-regular leading-none text-gray-500">
                                                <div class="w-5 h-5 rounded-md block"
                                                    style="background-color: {{ $region->color }}"></div>
                                                <span>{{ $region->color }}</span>
                                            </div>
                                        </td>
                                        <td class="flex align-center justify-end px-6 py-4">
                                            <a href="{{ route('regions.edit', $region) }}"
                                                class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2"
                                                title="{{ __('button.edit') }}">
                                                <svg aria-hidden="true" class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M18.656.93,6.464,13.122A4.966,4.966,0,0,0,5,16.657V18a1,1,0,0,0,1,1H7.343a4.966,4.966,0,0,0,3.535-1.464L23.07,5.344a3.125,3.125,0,0,0,0-4.414A3.194,3.194,0,0,0,18.656.93Zm3,3L9.464,16.122A3.02,3.02,0,0,1,7.343,17H7v-.343a3.02,3.02,0,0,1,.878-2.121L20.07,2.344a1.148,1.148,0,0,1,1.586,0A1.123,1.123,0,0,1,21.656,3.93Z" />
                                                    <path
                                                        d="M23,8.979a1,1,0,0,0-1,1V15H18a3,3,0,0,0-3,3v4H5a3,3,0,0,1-3-3V5A3,3,0,0,1,5,2h9.042a1,1,0,0,0,0-2H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H16.343a4.968,4.968,0,0,0,3.536-1.464l2.656-2.658A4.968,4.968,0,0,0,24,16.343V9.979A1,1,0,0,0,23,8.979ZM18.465,21.122a2.975,2.975,0,0,1-1.465.8V18a1,1,0,0,1,1-1h3.925a3.016,3.016,0,0,1-.8,1.464Z" />
                                                </svg>
                                                <span class="sr-only">{{ __('button.edit') }}</span>
                                            </a>

                                            {{ html()->form('DELETE', route('regions.destroy', $region))->open() }}
                                            <button type="submit"
                                                class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2"
                                                title="{{ __('button.delete') }}">
                                                <svg aria-hidden="true" class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M21,4H17.9A5.009,5.009,0,0,0,13,0H11A5.009,5.009,0,0,0,6.1,4H3A1,1,0,0,0,3,6H4V19a5.006,5.006,0,0,0,5,5h6a5.006,5.006,0,0,0,5-5V6h1a1,1,0,0,0,0-2ZM11,2h2a3.006,3.006,0,0,1,2.829,2H8.171A3.006,3.006,0,0,1,11,2Zm7,17a3,3,0,0,1-3,3H9a3,3,0,0,1-3-3V6H18Z" />
                                                    <path d="M10,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,10,18Z" />
                                                    <path d="M14,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,14,18Z" />
                                                </svg>
                                                <span class="sr-only">{{ __('button.delete') }}</span>
                                            </button>
                                            {{ html()->form()->close() }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="p-4 sm:p-8 bg-white shadow overflow-hidden sm:rounded-lg">
                        <p>{{ __('page.region.index.message.no_results') }}</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
