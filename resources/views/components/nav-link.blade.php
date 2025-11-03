@props(['active' => false])

<a class="{{ $active
    ? ' bg-gray-950/50 ' : '' }} rounded-md  px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white cursor-pointer"
    aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }}>
    {{ $slot }}
</a>