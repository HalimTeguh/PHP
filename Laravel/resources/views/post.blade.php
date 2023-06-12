@extends('/Layouts.main')

@section('container')
    <h2> {{$post->tittle}} </h2>
    <p> {!! $post->body !!} </p>

    <a href="/blog">Back to Blog</a>
@endsection