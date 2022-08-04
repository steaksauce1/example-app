
<x-layout>
	@include('dashboard._header')

	 <main class="max-w-xl mx-auto mt-6 lg:mt-20 space-y-6 bg-slate-50">
	 		 <x-notecard-view :notes="$notes" class="col-span-3" />
	 		 <div class="py-1 px-1">
        <article
        class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl bg-gray-200">
     
        <div class="py-10 px-8">
         
            <div class="mt-0 flex flex-col justify-between">
                <header class="text-center ">
                    <div class="mt-0">
                       <button class="text-7xl text-center justify-center inline text-gray-400" id="noteplus" onclick="NotecardCreateNewCard()" >+</button>
                    </div>
                </header>
               {{--  <span id="noteoldcopy" style="display: none;" class="line-through">{!! $notes->body !!}</span> --}}
                <form method="POST" action="/dashboard/store" enctype="multipart/form-data">
                    @csrf
                    <textarea maxlength="300" id="notetext" style="display: none; width: 100%;" name='body'><span class="line-through">{!! $notes->body !!}</span></textarea>
                    <input type="hidden" name="user_id" value="{{$notes->user_id}}">

                    <button type="submit" id="notesave" style="display: none">Save</button>
                </form>



               {{--  <form method="POST" action="/dashboard/store" enctype="multipart/form-data">
                    @csrf
                    <textarea maxlength="150" id="notetext" style="display: none" name='body'></textarea>
                    <button type="submit" id="notesave" style="display: none">Save</button>
                </form> --}}
            </div>
        </div>
        </article>
        
        </div>
	 		<a href="/dashboard"> back to dashboard</a><br>
	 		<a href="/dashboard/calendar/?month=1">back to calendar</a>
	 </main>

</x-layout>	
<script type="text/javascript" src="/app.js"></script>