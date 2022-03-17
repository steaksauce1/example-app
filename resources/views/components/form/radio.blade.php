@props(['name'])
    <x-form.field>
                    {{-- <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="{{ $name }}">{{ ucwords($name) }}</label> --}}

        
            <x-form.label name="{{ $name }}" />
                <label for="active">
                <input 
                    type="radio" 
                    name="{{ $name }}" 
                    id="active" 
                    {{-- value="active"  --}}
                    value=true
                   {{--  {{   old('status') !== null && old('status') == true ? 'checked' : '' }} --}}
                 > Active </label>
                 &nbsp;&nbsp;&nbsp; {{-- adding in some space here--}}
                 <label for="inactive">   
                <input 
                    type="radio" 
                    name="{{ $name }}" 
                    id="inactive" 
                   {{--  value="inactive"  --}}
                   value=false
                   {{--  {{  old('status') !== null && old('status') == true ? '' : 'checked' }} --}}
                 > Inactive </label>

                 
            <x-form.error name="{{ $name }}" />
    </x-form.field>

