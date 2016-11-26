<!-- Imagem -->
<div class="row">
    <div class="col-sm-3">
        <img src="{{url('images/cartas/'.$carta->nome.'.png')}}" alt="{{$carta->nome}}" style="border: 1px solid #ccc;">
    </div>
</div>

<!-- Id Field -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('id', 'ID:') !!}
            <p>{!! $carta->id !!}</p>
        </div>
    </div>
</div>

<!-- Nome Field -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('nome', 'Nome:') !!}
            <p>{!! $carta->nome !!}</p>
        </div>
    </div>
</div>

<!-- Nome Field -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('numero', 'Número:') !!}
            <p>{!! $carta->numero !!}</p>
        </div>
    </div>
</div>

<!-- Cor Field -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('cor', 'Cor:') !!}
            <p>{!! $carta->cor !!}</p>
        </div>
    </div>
</div>

<!-- Simbolo Field -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('simbolo', 'Simbolo:') !!}
            <p>{!! $carta->simbolo !!}</p>
        </div>
    </div>
</div>