   
@props(['comment'])

<x-panel class="bg-gray-100 ">
<article class="flex bg-gray-100 space-x-4">

    <div class="flex-shrink-0">
        <img src="https://i.pravatar.cc/60?u={{ $comment->user_id }}" alt="icon" width="60" height="60" class="rounded-xl">
    </div>
   
    <div>

        <header class="p-2">
            <h3 class="font-bold text-xs"> {{ $comment->author->username }}</h3>
            <p class="text-xs">
                Posted
                <time> {{ $comment->created_at->format('F j, Y, g:i a') }}</time>

            </p>
        </header>

        <p>
            {{ $comment->body }}
        </p>
    </div>

    @auth
     <div class="text-left text-gray-500">
        @if(auth()->user()->can('admin'))
        <form method="POST" action="/comment/{{ $comment->id }}">
                @csrf
                @method('DELETE')
                  <button>X</button>
        </form>
        @endif
    </div>
    @endauth
</article>
</x-panel>