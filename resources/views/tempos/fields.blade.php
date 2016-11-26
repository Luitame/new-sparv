<!-- Inicio Field -->
<div class="row">
    <div class="form-group col-sm-1">
        {!! Form::label('inicio', 'Início:') !!}
        {!! Form::text('inicio', null, ['class' => 'form-control inicioTempo']) !!}
    </div>
</div>

<!-- Fim Field -->
<div class="row">
    <div class="form-group col-sm-1">
        {!! Form::label('fim', 'Fim:') !!}
        {!! Form::text('fim', null, ['class' => 'form-control']) !!}
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
        {!! Form::text('mudandoEm', null, ['class' => 'form-control']) !!}
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
