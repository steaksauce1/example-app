
<x-layout>
	@include('dashboard._header')

	 <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6 bg-slate-50">
	 		 <x-notecard :notes="$notes" class="col-span-3" />
	 		<a href="/dashboard"> back to dashboard</a><br>
	 		<a href="/dashboard/calendar">back to calendar</a>
	 </main>

</x-layout>	