

{{-- <div class="border border-black"> --}}
    <div {{ $attributes(['class' => ' border-black']) }}>
    <div class="flex">
        {{-- <div class=" flex-initial border-r border-b border-black px-1 py-1 h-8 w-8">{{ $attributes(['class' => 'border border-gray-200 p-6 rounded-xl']) }} --}}
        <div class=" flex-initial border-r border-b border-black px-1 py-1 h-8 w-8">
            {{ $slot }}
        </div>

        <div class="flex-auto bg-gray-200"></div>
    </div>  
    <div class="px-8 py-6 bg-gray-200">
        content
    </div>
</div>