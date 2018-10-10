@extends('layouts.app')

@section('content')

    <h1>Posts</h1>
    @forelse ($posts as $post)
        {{$post->title}}
        <hr>
    @empty
        <p>Nenhuma Post Cadastrado</p>
    @endforelse

    {!! $posts->links() !!}
@endsection
