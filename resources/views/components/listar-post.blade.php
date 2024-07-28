@if ( $posts->count() )

<div class=" grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 css-es-cool">
    @foreach ($posts as $post)
         <div class=" border border-gray-600">
             <a href="{{ route('post.show', ['post' => $post, 'user' => $post->user ]) }}">
                 <img src=" {{ asset('uploads') .'/'. $post->imagen }}" alt="{{$post->titulo}}" />
             </a>
         </div>

    @endforeach
</div>

<div class=" my-7">
 {{ $posts->links('pagination::tailwind') }}
</div>

@else
   <p class=" text-center">No hay posts, sigue a alguien para poder mostrar sus posts</p>

@endif