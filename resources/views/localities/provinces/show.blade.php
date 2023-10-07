<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('navigation.province_show') }}
        </h1>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow overflow-hidden sm:rounded-lg">
                <h2 class="mb-6 text-xl font-semibold leading-none text-gray-900 md:text-2xl">{{ $province->name }}</h2>

                <div class="flex justify-between gap-5 mb-5">
                    <dl class="block w-full">
                        <dt class="mb-2 font-semibold leading-none text-gray-900">{{ __('form.label.slug') }}</dt>
                        <dd class="font-light leading-none text-gray-500">{{ $province->slug }}</dd>
                    </dl>

                    <dl class="block w-full">
                        <dt class="mb-2 font-semibold leading-none text-gray-900">{{ __('form.label.code_province') }}</dt>
                        <dd class="font-light leading-none text-gray-500">{{ $province->code }}</dd>
                    </dl>

                    <dl class="block w-full">
                        <dt class="mb-2 font-semibold leading-none text-gray-900">{{ __('form.label.code_province_center') }}</dt>
                        <dd class="font-light leading-none text-gray-500">{{ $province->ekatte }}</dd>
                    </dl>
                </div>

                <dl>
                    <dt class="mb-2 font-semibold leading-none text-gray-900">{{ __('form.label.description') }}</dt>
                    <dd class="mb-4 font-light leading-tight text-gray-500 sm:mb-5">{{ $province->description }}</dd>
                </dl>

                <hr class="h-px my-6 bg-slate-200 border-0">

                <dl class="flex items-center space-x-6">
                    <div>
                        <dt class="mb-2 font-semibold leading-none text-gray-900">{{ __('form.label.created_at') }}</dt>
                        <dd class="mb-4 font-light leading-none text-gray-500 sm:mb-5">
                            {{ $province->created_at->format('d.m.Y, H:i:s') }}</dd>
                    </div>

                    <div>
                        <dt class="mb-2 font-semibold leading-none text-gray-900">{{ __('form.label.updated_at') }}</dt>
                        <dd class="mb-4 font-light leading-none text-gray-500 sm:mb-5">
                            {{ $province->updated_at->format('d.m.Y, H:i:s') }}</dd>
                    </div>
                </dl>

                <div class="flex items-center space-x-4">
                    <a href="{{ route('provinces.edit', $province) }}"
                        class="text-white font-medium text-base text-center leading-none inline-flex items-center gap-3 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-base p-3">
                        <svg aria-hidden="true" class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18.656.93,6.464,13.122A4.966,4.966,0,0,0,5,16.657V18a1,1,0,0,0,1,1H7.343a4.966,4.966,0,0,0,3.535-1.464L23.07,5.344a3.125,3.125,0,0,0,0-4.414A3.194,3.194,0,0,0,18.656.93Zm3,3L9.464,16.122A3.02,3.02,0,0,1,7.343,17H7v-.343a3.02,3.02,0,0,1,.878-2.121L20.07,2.344a1.148,1.148,0,0,1,1.586,0A1.123,1.123,0,0,1,21.656,3.93Z" />
                            <path
                                d="M23,8.979a1,1,0,0,0-1,1V15H18a3,3,0,0,0-3,3v4H5a3,3,0,0,1-3-3V5A3,3,0,0,1,5,2h9.042a1,1,0,0,0,0-2H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H16.343a4.968,4.968,0,0,0,3.536-1.464l2.656-2.658A4.968,4.968,0,0,0,24,16.343V9.979A1,1,0,0,0,23,8.979ZM18.465,21.122a2.975,2.975,0,0,1-1.465.8V18a1,1,0,0,1,1-1h3.925a3.016,3.016,0,0,1-.8,1.464Z" />
                        </svg>
                        <span>{{ __('button.edit') }}</span>
                    </a>

                    {{ html()->form('DELETE', route('provinces.destroy', $province))->open() }}
                    <button type="submit"
                        class="text-white font-medium inline-flex text-base text-center leading-none items-center gap-3 bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg text-base p-3">
                        <svg aria-hidden="true" class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21,4H17.9A5.009,5.009,0,0,0,13,0H11A5.009,5.009,0,0,0,6.1,4H3A1,1,0,0,0,3,6H4V19a5.006,5.006,0,0,0,5,5h6a5.006,5.006,0,0,0,5-5V6h1a1,1,0,0,0,0-2ZM11,2h2a3.006,3.006,0,0,1,2.829,2H8.171A3.006,3.006,0,0,1,11,2Zm7,17a3,3,0,0,1-3,3H9a3,3,0,0,1-3-3V6H18Z" />
                            <path d="M10,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,10,18Z" />
                            <path d="M14,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,14,18Z" />
                        </svg>
                        <span>{{ __('button.delete') }}</span>
                    </button>
                    {{ html()->form()->close() }}

                    <div class="w-px h-4 block bg-slate-200"></div>

                    <a href="https://www.nsi.bg/nrnm/ekatte/regions" target="_blank" rel="noopener"
                        class="text-white font-medium text-base text-center leading-none inline-flex items-center gap-3 bg-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 rounded-lg text-base p-3">
                        <svg aria-hidden="true" class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20,11v8c0,2.757-2.243,5-5,5H5c-2.757,0-5-2.243-5-5V9c0-2.757,2.243-5,5-5H13c.552,0,1,.448,1,1s-.448,1-1,1H5c-1.654,0-3,1.346-3,3v10c0,1.654,1.346,3,3,3H15c1.654,0,3-1.346,3-3V11c0-.552,.448-1,1-1s1,.448,1,1ZM21,0h-7c-.552,0-1,.448-1,1s.448,1,1,1h6.586L8.293,14.293c-.391,.391-.391,1.023,0,1.414,.195,.195,.451,.293,.707,.293s.512-.098,.707-.293L22,3.414v6.586c0,.552,.448,1,1,1s1-.448,1-1V3c0-1.654-1.346-3-3-3Z" />
                        </svg>
                        <span>{{ __('button.nsi_provinces') }}</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
