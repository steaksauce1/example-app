{{--    @props(['name', 'type' => 'text']) --}}
   @props(['name'])
    <x-form.field>
                    {{-- <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="{{ $name }}">{{ ucwords($name) }}</label> --}}
            <x-form.label name="{{ $name }}" />
                <input 
                    class="border border-gray-400 p-2 w-full" 
                    name="{{ $name }}" 
                    id="{{ $name }}" 
                    {{ $attributes(['value' => old($name)])  }}
                 >
            <x-form.error name="{{ $name }}" />
    </x-form.field>