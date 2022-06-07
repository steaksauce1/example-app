@props(['notes'])


 <div class="lg:grid lg:grid-cols-6 bg-red-50 rounded-xl">
 
  
     @foreach($notes as $note)
         <x-notecard :notes="$note" class="col-span-3" />
     @endforeach

     <div class="py-1 px-1">
        <article
        {{ $attributes->merge(['class' => 'transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl bg-gray-200'])}}>
        {{-- <button class="flex justify-end py-1 px-1 font-sans" style="color:darkgray">
            <form method="POST" action="dashboard/{{ $note->id }}">
                @csrf
                @method('DELETE')
                 <button>Delete</button>
              </form>
            x
            </button> --}}
        <div class="py-10 px-8">
            {{-- <div class="text-center">
                <img src="/images/red-tac.png" style="max-height: 25px;">
            </div> --}}
            <div class="mt-0 flex flex-col justify-between">
                <header class="text-center ">
                    <div class="mt-0">
                       <button class="text-8xl text-center justify-center inline " id="noteplus" onclick="NotecardCreateNewCard()" style="color: #888">+</button>
                    </div>
                </header>
                <form method="POST" action="dashboard/store" enctype="multipart/form-data">
                    @csrf
                    <textarea maxlength="150" id="notetext" style="display: none" name='body'></textarea>
                    <button type="submit" id="notesave" style="display: none">Saver</button>
                </form>
            </div>
        </div>
    </article>
    
    </div>
    
 </div>
