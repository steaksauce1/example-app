
<div class="lg:grid lg:grid-cols-7 bg-slate-900 rounded-xl">

  
    @php
    $month = htmlspecialchars($_GET["month"]);
    $monthstart = 0;
    $monthend = 31;


    $day = 1;
    // echo $slot
    $week = 0;

    switch ($month) {
        case '1':
            $monthstart = 6;
            $monthend = 31;
            break;
        case '2':
            $monthstart = 2;
            $monthend = 28;
            break;
        case '3':
            $monthstart = 2;
            $monthend = 31;
            break;
            case '4':
            $monthstart = 5;
            $monthend = 30;
            break;
            case '5':
            $monthstart = 0;
            $monthend = 31;
            break;
            case '6':
            $monthstart = 3;
            $monthend = 30;
            break;
            case '7':
            $monthstart = 5;
            $monthend = 31;
            break;
            case '8':
            $monthstart = 1;
            $monthend = 31;
            break;
            case '9':
            $monthstart = 4;
            $monthend = 30;
            break;
            case '10':
            $monthstart = 6;
            $monthend = 31;
            break;
            case '11':
            $monthstart = 2;
            $monthend = 30;
            break;
            case '12':
            $monthstart = 4;
            $monthend = 31;
            break;
            
        
        default:
            # code...
            break;
    }


    switch ($slot) {
        case '0':
        $week = 0;
        $day = $day -$monthstart;
            break;
        
        case '1':
        $week = 1;
        $day = $day -$monthstart + 7*$week ;
            break;
        
        case '2':
        $week = 2;
        $day = $day -$monthstart + 7*$week ;
            break;
        
        case '3':
        $week = 3;
        $day = $day -$monthstart + 7*$week ;
            break;
        
        case '4':
        $week = 4;
        $day = $day -$monthstart + 7*$week ;
            break;

        case '5':
        $week = 5;
        $day = $day -$monthstart + 7*$week ;
            break;
        
        default:
        $week = 0;
            break;
    }
@endphp


    @for ($i = 1; $i < 8; $i++)

            
          



    @if($day < 1)
        @if ($i == 1)
        <x-calendar-day class="border-r border-b border-l"> </x-calendar-day>
        @else
        <x-calendar-day class="border-r border-b"> </x-calendar-day>
    @endif
    
    @php
        $day += 1;
    @endphp

    @elseif($day > $monthend)
        @if ($i == 1)
        <x-calendar-day class="border-r border-b border-l"> </x-calendar-day>
        @else
        <x-calendar-day class="border-r border-b"> </x-calendar-day>
    @endif
    
    @php
        $day += 1;
    @endphp


    @else
        @if ($day < 10)
            @if ($i == 1)
            <x-calendar-day class="border-r border-b border-l">0{{$day}}</x-calendar-day>
            @else
            <x-calendar-day class="border-r border-b">0{{$day}}</x-calendar-day>
            @endif


        @php
        $day += 1;
        @endphp


        @else
      
            @if ($i == 1)
            <x-calendar-day class="border-r border-b border-l">{{$day}}</x-calendar-day>
            @else
            <x-calendar-day class="border-r border-b">{{$day}}</x-calendar-day>
            @endif


        @php
        $day += 1;
        @endphp
    @endif 
        
        {{-- @if($day < 1)
            <x-calendar-day class="border-r border-b"> </x-calendar-day>
            @php
                $day += 1;
            @endphp
            @elseif($day > $monthend)
            <x-calendar-day class="border-r border-b"> </x-calendar-day>
            @php
                $day += 1;
            @endphp


            @else
                @if ($day < 10)
                <x-calendar-day class="border-r border-b">0{{$day}}</x-calendar-day>
                @php
                $day += 1;
                @endphp
                @else
                <x-calendar-day class="border-r border-b">{{$day}}</x-calendar-day>
                @php
                $day += 1;
                @endphp
            @endif  --}}

        @endif
      
       
    @endfor
</div>