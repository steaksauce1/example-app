  @props(['name'])
  <x-form.field>
                      {{-- <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="{{ $name }}">{{ ucwords($name) }}</label> --}}
                    <x-form.label name="{{ $name }}" />
                    <textarea 
                    class="border border-gray-400 p-2 w-full" 
                   {{--  type="textarea"  --}}
                    name="{{ $name }}" 
                    id="{{ $name }}" 
                    required
                    {{ $attributes }}
                    >{{ $slot ?? old($name) }}</textarea>
                   <x-form.error name="{{ $name }}"/>
              </x-form.field>