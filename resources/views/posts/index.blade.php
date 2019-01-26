@extends('layouts.app')

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col-2"><h1>Postagens</h1></th>
            </tr>
        </thead>

        <tbody>
        @forelse ($posts as $post)
            <tr>
                <th class="text-uppercase">{{ $post->title }} ({{ $post->comments->count() }})</th>
                <td>
                    <a class="btn btn-primary glyphicon glyphicon-search" href="{{ route('posts.show', $post->id )}}">show</a>
                </td>
            </tr>
        @empty
            <tr>
                <th>Nenhum postagens cadastrada</th>
            </tr>
        @endforelse
        </tbody>
    </table>
    {!! $posts->links() !!}
@endsection
