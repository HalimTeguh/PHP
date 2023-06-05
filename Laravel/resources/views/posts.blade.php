@extends('/Layouts.main')

@section('container')
    <h1 class="mb-5">Halaman Post</h1>
    @foreach ($posts as $post)
        <article class="mb-4">
            <h2> 
                <a href="/post/{{$post['slug']}}">
                    {{$post['title']}} </h2>
                </a>
            <h4> {{$post['author']}} </h4>
            <p> {{$post['body']}} </p>
        </article>
    @endforeach
@endsection