<div class="">
    @if(auth()->check())
    <form action="#" method="POST" class="form">
        @csrf
        <input type="hidden" name="post_id" value="{{$post->id}}">

        <div class="form-group">
            <input class="form-control" type="text" name="title" placeholder="Titulo" >
        </div>
        <div class="form-group">
            <textarea class="form-control" type="text" name="body" cols="30" rows="5" placeholder="Descrição"></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-default" type="submit" >Enviar</button>
        </div>
    </form>
    @else
        <p class="text-danger">Você precisa esta logado para comentar</p>
        <a class="text-white" href="{{ route('login') }}"><button class="btn btn-primary">Login</button></a>

    @endif
</div>
