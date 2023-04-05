<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center w-full px-6 py-2.5 text-center text-white duration-200 bg-sky-600 border-2 border-sky-600 rounded-full hover:bg-transparent hover:border-sky-600 hover:text-sky-600 focus:outline-none focus-visible:outline-none text-sm focus-visible:ring-black']) }}>
    {{ $slot }}
</button>
