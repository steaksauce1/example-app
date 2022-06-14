<x-layout >
	@include('dashboard._header')

    <main class="lg:grid lg:grid-cols-7 bg-slate-900 rounded-xl">
        {{-- <div class="border border-black">
            <div class="border-r border-b border-black px-1 py-1 h-8 w-8">
                00
            </div>
            <div class="px-8 py-6">
            content
            </div>
        </div>
        <div class="border border-black">
            <div class="border-r border-b border-black px-1 py-1 h-8 w-8">
                01
            </div>
            <div class="px-8 py-6">
            content
            </div>
        </div>
        <div class="border border-black">
            <div class="border-r border-b border-black px-1 py-1 h-8 w-8">
                02
            </div>
            <div class="px-8 py-6">
            content
            </div>
        </div>
        <div class="border border-black">
            <div class="border-r border-b border-black px-1 py-1 h-8 w-8">
                03
            </div>
            <div class="px-8 py-6">
            content
            </div>
        </div>
        <div class="border border-black">
            <div class="border-r border-b border-black px-1 py-1 h-8 w-8">
                04
            </div>
            <div class="px-8 py-6">
            content
            </div>
        </div>
        <div class="border border-black">
            <div class="border-r border-b border-black px-1 py-1 h-8 w-8">
                05
            </div>
            <div class="px-8 py-6">
            content
            </div>
        </div>
        <div class="border border-black">
            <div class="border-r border-b border-black px-1 py-1 h-8 w-8">
                06
            </div>
            <div class="px-8 py-6">
            content
            </div>
        </div> --}}

       
    </main>
    <div class="bg-blue-100 p-2 flex-auto rounded-xl">
        << Month picker goes here >>
    </div>
    <x-calendar-month></x-calendar-month>
</x-layout>