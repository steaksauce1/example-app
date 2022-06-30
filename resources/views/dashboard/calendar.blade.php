<x-layout>
	@include('dashboard._header')

    <main>


       
    
    <div class="bg-blue-100 p-2 flex-auto rounded-xl">
       
        @php 

            $month = htmlspecialchars($_GET["month"]);
            $name = '';
            $body = "content";

            switch ($month) {
                case '1':
                $name = 'Jan';
                    break;
                    case '2':
                $name = 'Feb';
                    break;
                    case '3':
                $name = 'Mar';
                    break;
                    case '4':
                $name = 'Apr';
                    break;
                    case '5':
                $name = 'May';
                    break;
                    case '6':
                $name = 'Jun';
                    break;
                    case '7':
                $name = 'Jul';
                    break;
                    case '8':
                $name = 'Aug';
                    break;
                    case '9':
                $name = 'Sep';
                    break;
                    case '10':
                $name = 'Oct';
                    break;
                    case '11':
                $name = 'Nov';
                    break;
                    case '12':
                $name = 'Dec';
                    break;
                
                default:
                    $name = '1';
                    break;
            }
           
        @endphp


        <div class="text-center justify-center p-3">
        @if( $month == 1)
        @else
        <span class="text-5xl"><a href="?month={{$month - 1}}" target="_self"> << </a> </span>
        @endif
       <span class="text-7xl text-center">{{ $name ?? ''}}</span>
        @if( $month == 12)
        @else
        <span class="text-5xl"><a href="?month={{$month + 1}}" target="_self"> >> </a></span>
        @endif
        </div>
       


        <div class="text-center">
        <a  href="/dashboard/calendar/?month=1" style="color: rgb(3 105 161); !important">Jan</a>
        <a  href="/dashboard/calendar/?month=2" style="color: rgb(3 105 161); !important">Feb</a>
        <a  href="/dashboard/calendar/?month=3" style="color: rgb(3 105 161); !important">Mar</a>
        <a  href="/dashboard/calendar/?month=4" style="color: rgb(3 105 161); !important">Apr</a>
        <a  href="/dashboard/calendar/?month=5" style="color: rgb(3 105 161); !important">May</a>
        <a  href="/dashboard/calendar/?month=6" style="color: rgb(3 105 161); !important">Jun</a>
        <a  href="/dashboard/calendar/?month=7" style="color: rgb(3 105 161); !important">Jul</a>
        <a  href="/dashboard/calendar/?month=8" style="color: rgb(3 105 161); !important">Aug</a>
        <a  href="/dashboard/calendar/?month=9" style="color: rgb(3 105 161); !important">Sep</a>
        <a  href="/dashboard/calendar/?month=10" style="color: rgb(3 105 161); !important">Oct</a>
        <a  href="/dashboard/calendar/?month=11" style="color: rgb(3 105 161); !important">Nov</a>
        <a  href="/dashboard/calendar/?month=12" style="color: rgb(3 105 161); !important">Dec</a>
        </div>
        

       
    </div>
    
    <x-calendar-month-2 :notes="$notes">
        <x-slot name="body">{{$body}}</x-slot>
    </x-calendar-month-2>
    <p class="bg-red-100 text-center p-2 rounded-xl"><a  href="/dashboard">Dashboard View</a></p>
    {{-- <x-calendar-month :notes="$notes">
        <x-slot name="body">{{$body}}</x-slot>
    </x-calendar-month> --}}


</main>

</x-layout>

<script type="text/javascript" src="/app.js"></script>