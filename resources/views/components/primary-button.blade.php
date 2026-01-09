<button class="batten inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none transition ease-in-out duration-150"
    {{ $attributes->merge(['type' => 'submit']) }}>
    {{ $slot }}
</button>
<style>
    .batten{
        background-color: white;    
    }

    .batten:hover{
        transform: scale(1.01);
    }

    .batten:active{
        transform: scale(0.99);
    }
</style>
