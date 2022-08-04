@props(['notes'])


 <div class="lg:grid lg:grid-cols-6 bg-gray-300 rounded-xl">
 
  
     @foreach($notes as $note)
      
         <x-notecard :notes="$note" class="col-span-3" />

     @endforeach

     @if ($notes->count() < 12)
     <div class="py-1 px-1">
        <article
        {{ $attributes->merge(['class' => 'transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl bg-gray-200'])}}>
     
        <div class="py-6 px-3">
         
            <div class="mt-0 flex flex-col justify-between">
                <header class="text-center ">
                    <div class="mt-0">
                       <button class="text-7xl text-center justify-center inline text-gray-400 " id="noteplus" onclick="NotecardCreateNewCard()" >+</button>
                    </div>
                </header>
                <form method="POST" action="dashboard/store" enctype="multipart/form-data">
                    @csrf
                    <textarea maxlength="150" id="notetext" style="display: none; width: 100%; height: 100px;" name='body'></textarea>
                    <button type="submit" id="notesave" style="display: none; margin: auto;">Save</button>
                </form>
            </div>
        </div>
        </article>
        
        </div>
    @else
         
    @endif
    
 </div>
