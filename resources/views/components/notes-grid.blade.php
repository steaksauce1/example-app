@props(['notes'])

<p>Jfasdfasdf</p>

 <div class="lg:grid lg:grid-cols-6 bg-red-50">
     @foreach($notes as $note)
         <x-notecard :notes="$notes" class="col-span-3"/>
         <p>HAH</p>
     @endforeach

     <article
        {{ $attributes->merge(['class' => 'transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl'])}}>
        <div class="py-6 px-5">
            <div>
                <p>Tac!</p>
            </div>
            <div class="mt-8 flex flex-col justify-between">
                <header>
                    <div class="mt-4">
                        <p class="text-xl">
                          asdfasdf
                        </p>
                        <span class="mt-2 block text-gray-400 text-xs">
                            Published <time>asdfasdfasd</time> 
                        </span>
                    </div>
                </header>
            </div>
        </div>
    </article>
 </div>
