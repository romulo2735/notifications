<div class="">
    @if(auth()->check())

        {{-- Mensagem de Sucesos ao criar o comentário --}}
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success')  }}
            </div>
        @endif

        {{-- Mensagem de erros  caso exista obrigatório não seja preenchido --}}
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    <form action="{{ route('comment.store')  }}" method="POST" class="form">
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
