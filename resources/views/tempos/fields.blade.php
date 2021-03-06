<!-- Inicio Field -->
<div class="row">
    <div class="form-group col-sm-1">
        {!! Form::label('inicio', 'Total:') !!}
        {!! Form::text('total', null, ['class' => 'form-control tempo', 'placeholder'=> '00:00:00', 'style' => 'padding:5px;']) !!}
    </div>
</div>

<!-- Ordem Field -->
<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('ordem', 'Ordem:') !!}
        {!! Form::select('ordem', ['crescente' => 'Crescente', 'decrescente' => 'Decrescente'], null, ['class' => 'form-control']) !!}
    </div>
</div>

<!-- Mudandoem Field -->
<div class="row">
    <div class="form-group col-sm-1">
        {!! Form::label('mudandoEm', 'Muda em:') !!}
        {!! Form::text('mudandoEm', null, ['class' => 'form-control tempo', 'placeholder'=> '00:00:00', 'style' => 'padding:5px;']) !!}
    </div>
</div>

<!-- Visibilidadeinicial Field -->
<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('visibilidadeInicial', 'Visibilidade Inicial:') !!}
        {!! Form::select('visibilidadeInicial', ['visivel' => 'Visível', 'invisivel' => 'Invisível'], null, ['class' => 'form-control']) !!}
    </div>
</div>

<!-- Submit Field -->
<div class="row">
    <div class="form-group col-sm-12">
        {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('tempos.index') !!}" class="btn btn-default">Voltar</a>
    </div>
</div>

@include('layouts.mask.mask')
