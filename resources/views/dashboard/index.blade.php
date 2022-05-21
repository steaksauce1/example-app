<x-layout>
	@include('dashboard._header')
	

	 <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6 bg-slate-50">
        {{-- @if ($posts->count())
	
        <x-post-grid :posts="$posts"/>


     
         {{ $posts->links()}}
      @else
          <p class="text-center">No post here boss, what are you doing!?</p>
      @endif --}}
        @if ($notes->count())
            <x-notes-grid :notes="$notes" />
        @else
            <p class="text-center">No Notes here boss, what are you doing!?</p>
        @endif
	
	 </main>



</x-layout>
