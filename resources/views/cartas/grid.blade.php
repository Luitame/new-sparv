<div class="row">
    @foreach($cartas as $key => $carta)
        <div class="col-md-2 portfolio-item">
            <a href="{{route('cartas.show', [$carta->id])}}" data-toggle="tooltip" data-placement="top" title="Nome: {{$carta->nome}}, Número: {{$carta->numero}}, Cor: {{$carta->cor}} e Simbolo: {{$carta->simbolo}}.">
                <img class="img-responsive"
                     src="{{url('images/cartas/'.$carta->nome.'.png')}}"
                     style="overflow: hidden; width: 199px; height: 257px; border: 1px solid #ccc; margin-top: 15px;"
                     alt="{{$carta->nome}}">
            </a>
        </div>
    @endforeach
</div>