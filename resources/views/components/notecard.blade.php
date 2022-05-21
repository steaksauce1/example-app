@props(['notes'])
    <article
        {{ $attributes->merge(['class' => 'transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl'])}}>
        <div class="py-6 px-5">
            <div class="text-center">
                <p>Tac!</p>
            </div>
            <div class="mt-8 flex flex-col justify-between">
                <header>
                    <div class="mt-4">
                        <p class="text-xl">
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