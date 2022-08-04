@props(['notes'])


{{-- <div class="border border-black"> --}}
<div {{ $attributes(['class' => ' border-black']) }}>
    <div class="flex">
        {{-- <div class=" flex-initial border-r border-b border-black px-1 py-1 h-8 w-8">{{ $attributes(['class' => 'border border-gray-200 p-6 rounded-xl']) }} --}}
        <div class=" flex-initial border-r border-b border-black px-1 py-1 h-8 w-8 bg-gray-100 text-gray-900">  
            {{$slot}}   
        </div>
        <div class="flex-auto {{-- bg-gray-200 --}}"></div>
    </div>  
    <div name="day{{$day ?? ''}}"class="px-2 py-2 {{-- bg-gray-200 --}}">      
            {{$day ?? ''}}
            {{$month ?? ''}}
            {{$body ?? ''}}
    </div>
</div>

