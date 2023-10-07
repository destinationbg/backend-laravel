<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full inline-flex items-center justify-center px-4 py-2 bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-white text-center rounded-lg text-lg px-5 py-2.5 text-center']) }}>
    {{ $slot }}
</button>
