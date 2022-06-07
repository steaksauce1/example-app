@props(['notes'])
<div class="py-1 px-1">
   
    <article
        {{ $attributes->merge(['class' => 'transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl bg-gray-200'])}}>
        <button class="flex justify-end py-1 px-1 font-sans" style="color:darkgray">
            <form method="POST" action="dashboard/delete/{{ $notes->id }}">
                @csrf
                @method('DELETE')
                 <button>Delete</button>
              </form>
            x
            </button>
        <div class="pb-4 px-4">
            <div class="text-center">
                <img src="/images/blue-pin.jpg" class="max-h-8 justify-center inline">
            </div>
            <div class="mt-1 flex flex-col justify-between">
                <header>
                    <div class="mt-1">
                        <p class="text-l" style=" white-space: wrap; display: block; max-width: 150px; overflow: auto">
                            {{ $notes->body }}
                        </p>
                        <span class="mt-2 block text-gray-400 text-xs">
                            Published <time>{{ $notes->created_at }}</time> 
                        </span>
                    </div>
                </header>
            </div>
        </div>
    </article>

</div>