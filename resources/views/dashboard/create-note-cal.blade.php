<x-layout>
    <x-settings heading="Tac a note on the dashboard!">
         <form method="POST" action="/dashboard/storecalendar" enctype="multipart/form-data">
                @csrf
                <x-form.textarea name='body'/>
                <x-form.input name='month'/>
                <x-form.input name='day'/>

              <div class="mb-6"> 
                <x-form.button>Tac!</x-form.button>
              </div>
            </form>
    </x-settings>
    
</x-layout>