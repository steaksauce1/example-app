
@props(['notes'])

@php
    // $body = 5;

@endphp
<div>
    <div class="lg:grid lg:grid-cols-7 bg-slate-900 rounded-xl">
        <div class="border border-black">Sunday</div>
        <div class="border-b border-r border-t border-black">Monday</div>
        <div class="border-b border-r border-t border-black">Tuesday</div>
        <div class="border-b border-r border-t border-black">Wednesday</div>
        <div class="border-b border-r border-t border-black">Thursday</div>
        <div class="border-b border-r border-t border-black">Friday</div>
        <div class="border-b border-r border-t border-black">Saturday</div>
    </div>









    @for($j = 0; $j <= 5; $j++)
        <x-calendar-week :notes="$notes">{{$j}}
            <x-slot name="body">{{$body}}</x-slot>
        </x-calendar-week>
        {{-- <x-calendar-week :notes="$notes"></x-calendar-week> --}}
    @endfor
   
    
</div>