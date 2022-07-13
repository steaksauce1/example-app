<article
        {{ $attributes->merge(['class' => 'transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl bg-gray-200'])}}>
     
        <div class="py-1 px-1">
         
            <div class="mt-0 flex flex-col justify-between">
                <header class="text-center ">
                    <div class="mt-0">
                       <button class="text-7xl text-center justify-center inline text-gray-400 " id="noteplus{{$day}}" onclick="NotecardCreateNewCardCalendar({{$day}}, {{$month}})" >+</button>
                    </div>
                </header>
                <form method="POST" action="/dashboard/storecalendar" enctype="multipart/form-data">
                    @csrf
                    <textarea maxlength="150" id="notetext{{$day}}" style="display: none; width: 100%" name='body'></textarea>
                    <input type="hidden" id="month{{$month}}" name='month' value="{{ $month }}">
                    <input type="hidden" id="day{{$day}}" name='day' value="{{ $day }}">

                    <button type="submit" id="notesave{{$day}}" style="display: none">Save</button>
                </form>
            </div>
        </div>
        </article>