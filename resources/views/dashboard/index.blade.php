<x-layout>
	@include('dashboard._header')
	

	 <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6 bg-slate-50">
    
        @if ($notes->count())
            <p class="bg-green-100 p-2 rounded-xl">Total notes: {{ $notes->count() }}</p>
            <x-notes-grid :notes="$notes" />
            {{ $notes->links()}}
            <p class="bg-blue-100 text-center p-2 rounded-xl"><a  href="dashboard/calendar/?month=1">Calendar View</a></p>
        @else
          <div class="py-1 px-1">
        <article
       class = "transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl bg-gray-200"}}>
    
        <div class="py-10 px-8">
         
            <div class="mt-0 flex flex-col justify-between">
                <header class="text-center ">
                    <div class="mt-0">
                       <button class="text-7xl text-center justify-center inline text-gray-400 " id="noteplus" onclick="NotecardCreateNewCard()" >+</button>
                    </div>
                </header>
                <form method="POST" action="dashboard/store" enctype="multipart/form-data">
                    @csrf
                    <textarea maxlength="150" id="notetext" style="display: none" name='body'></textarea>
                    <button type="submit" id="notesave" style="display: none">Save</button>
                </form>
            </div>
        </div>
        </article>
        
        </div>
            <p class="text-center p-2 rounded-xl">No Notes here boss, what are you doing!?</p>
        @endif


      
	
	 </main>



</x-layout>

<script type="text/javascript" src="app.js"></script>