@extends('layouts.app')

@section('content')
    <table class="table table-hover">
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
                    <a class="btn btn-primary glyphicon glyphicon-eye-open" href="{{ route('posts.show', $post->id )}}">vê</a>
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
