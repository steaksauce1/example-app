
<div class="lg:grid lg:grid-cols-7 bg-slate-900 rounded-xl">
    @for ($i = 1; $i < 8; $i++)
          
            @if ($i < 10)
            <x-calendar-day>0{{$i}}</x-calendar-day>
            
            @else
            <x-calendar-day>{{$i}}</x-calendar-day>
            @endif 
       
    @endfor
</div>