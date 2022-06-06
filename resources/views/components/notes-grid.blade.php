@props(['notes'])


 <div class="lg:grid lg:grid-cols-6 bg-red-50 rounded-xl">
 
  
     @foreach($notes as $note)
         <x-notecard :notes="$note" class="col-span-3" />
     @endforeach

     <div class="py-1 px-1">
        <article
        {{ $attributes->merge(['class' => 'transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl bg-gray-200'])}}>
        <a href="#" class="flex justify-end py-1 px-1 font-sans" style="color:darkgray">x</a>
        <div class="pb-4 px-4">
            <div class="text-center">
                <img src="/images/blue-pin.jpg">
            </div>
            <div class="mt-6 flex flex-col justify-between">
                <header>
                    <div class="mt-4">
                       +
                    </div>
                </header>
            </div>
        </div>
    </article>
    
    </div>
    
 </div>
