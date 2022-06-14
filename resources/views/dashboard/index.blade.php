<x-layout>
	@include('dashboard._header')
	

	 <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6 bg-slate-50">
    
        @if ($notes->count())
            <p class="bg-green-100 p-2 rounded-xl">Total notes: {{ $notes->count() }}</p>
            <x-notes-grid :notes="$notes" />
            {{ $notes->links()}}
            <p class="bg-blue-100 text-center p-2 rounded-xl"><a  href="dashboard/calendar">Calendar View</a></p>
        @else
            <p class="text-center p-2 rounded-xl">No Notes here boss, what are you doing!?</p>
        @endif


      
	
	 </main>



</x-layout>

<script type="text/javascript" src="app.js"></script>