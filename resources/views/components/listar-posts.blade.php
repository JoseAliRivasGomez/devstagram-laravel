<div>
    @if ($posts->count())
            
        <div class="grid md:grind-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        @foreach ($posts as $post)
            <div>
                <a href="{{route('posts.show', ['user' => $post->user, 'post' => $post])}}">
                    <img src="{{asset('uploads') . '/' . $post->imagen}}" alt="Imagen del post {{$post->titulo}}" />
                </a>
            </div>
        @endforeach
        </div>

        <div class="mt-10">
            {{$posts->links()}}
        </div>

    @else
        <p class="text-gray-600 uppercase text-sm text-center font-bold">No hay posts</p>
    @endif
</div>