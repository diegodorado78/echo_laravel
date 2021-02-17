<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center p-2 bg-blue-800 border border-transparent rounded-md font-bold text-md text-white  tracking-widest hover:bg-blue-600 active:bg-blue-900 focus:outline-none focus:border-gray-900 focus:shadow-outline- disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
