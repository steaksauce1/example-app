<x-layout>
 <section class="px-6 py-8">
   
    <main class="max-w-lg mx-auto mt-10 bg-blue-100 border border-blue-400 p-6 rounded-xl">
        <x-panel>
        <h1 class="text-center font-bold text-xl">Log In!</h1>


         <form method="POST" action="/login" class="mt-10">
            
            @csrf
           {{--  <div class="mb-6">
               

                <label class="block mb-2 mt-4 uppercase font-bold text-xs text-gray-700" for="email">
                    Email
                </label>

                    <input  class="border border-gray-400 p-2 mb-2 w-full"
                            type="email" 
                            name="email" 
                            id="email" 
                            value="{{ old('email') }}" 
                            required>

                        @error('email')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror


                <label class="block mb-2 mt-4 uppercase font-bold text-xs text-gray-700" for="password">
                    Password
                </label>

                    <input  class="border border-gray-400 p-2 mb-2 w-full"
                            type="password" 
                            name="password" 
                            id="password" 
                            required>
                    @error('password')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror


                <div class="mb-6 py-2">
                    <button type="submit" class="bg-blue-500 text-white rounded py-2 px-4 hover:bg-blue-600">
                        Log In
                    </button>
                </div>

                @if($errors->any())
                <ul>
                @foreach ($errors->all() as $errors)
                    <li class="text-red-500 text-xs mt-2">{{ $errors }}</li>
                @endforeach
                </ul>
                @endif


            </div> --}}

                    <x-form.input name="email" type="email" autocomplete="username" required />
                    <x-form.input name="password" type="password" autocomplete="current-password" required />

                    <x-form.button>Log In</x-form.button>
        </form>




    </x-panel>
   </main>
</section>
</x-layout>