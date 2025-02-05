<x-layout>
    @foreach ($posts as $post)
        <article class="{{ $loop->even ? "mb-6" : ''}}">
            <h1>
                <a href="/posts/<?= $post->slug?>">
                    {{ $post->title }}
                </a>
            </h1>

            <p>
                By <a href="authors/{{ $post->author->username}}">{{ $post->author->name }}</a> in <a href="categories/{{ $post->category->slug }}"> {{ $post->category->name }}</a>
            </p>

            <div>
                {{ $post->excerpt }}
            </div>
        </article>
        @endforeach
        
        <a href="/">Go back</a>

</x-layout>