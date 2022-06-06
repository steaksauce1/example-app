<x-layout>
	@include('dashboard._header')
	

	 <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6 bg-slate-50">
    
        @if ($notes->count())
            <p class="bg-gray-100">Number of posts: {{ $notes->count() }}</p>
            <x-notes-grid :notes="$notes" />
            <p class="bg-blue-100">End of posts</p>
        @else
            <p class="text-center">No Notes here boss, what are you doing!?</p>
        @endif


      
	
	 </main>



</x-layout>
