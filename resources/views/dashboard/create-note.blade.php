<x-layout>
    <x-settings heading="Tac a note on the dashboard!">
         <form method="POST" action="/dashboard/store" enctype="multipart/form-data">
                @csrf
                <x-form.textarea name='body'/>

              <div class="mb-6"> 
                <x-form.button>Tac!</x-form.button>
              </div>
            </form>
    </x-settings>
    
</x-layout>