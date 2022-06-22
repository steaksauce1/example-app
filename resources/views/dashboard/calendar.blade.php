<x-layout >
	@include('dashboard._header')

    <main class="lg:grid lg:grid-cols-7 bg-slate-900 rounded-xl">


       
    </main>
    <div class="bg-blue-100 p-2 flex-auto rounded-xl">
       
        @php 
            echo  htmlspecialchars($_GET["month"]);

            $month = htmlspecialchars($_GET["month"]);
            $name = '';

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
                    $name = 'Default';
                    break;
            }
           
        @endphp
        @if( $month == 1)
        @else
              << 
        @endif
       <p class="text-7xl text-center">{{ $name ?? ''}}</p>
        @if( $month == 12)
        @else
            >>
        @endif


        <div class="text-center">
        <a  href="/dashboard/calendar/?month=1">Jan</a>
        <a  href="/dashboard/calendar/?month=2">Feb</a>
        <a  href="/dashboard/calendar/?month=3">Mar</a>
        <a  href="/dashboard/calendar/?month=4">Apr</a>
        <a  href="/dashboard/calendar/?month=5">May</a>
        <a  href="/dashboard/calendar/?month=6">Jun</a>
        <a  href="/dashboard/calendar/?month=7">Jul</a>
        <a  href="/dashboard/calendar/?month=8">Aug</a>
        <a  href="/dashboard/calendar/?month=9">Sep</a>
        <a  href="/dashboard/calendar/?month=10">Oct</a>
        <a  href="/dashboard/calendar/?month=11">Nov</a>
        <a  href="/dashboard/calendar/?month=12">Dec</a>
        </div>
        

       
    </div>
    
    <x-calendar-month></x-calendar-month>
    <p class="bg-red-100 text-center p-2 rounded-xl"><a  href="/dashboard">Dashboard View</a></p>
</x-layout>