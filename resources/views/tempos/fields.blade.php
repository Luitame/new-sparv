<div class="row">
    <!-- Inicio Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('inicio', 'Início:') !!}
        {!! Form::text('inicio', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Fim Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('fim', 'Fim:') !!}
        {!! Form::text('fim', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Ordem Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('ordem', 'Ordem:') !!}
        {!! Form::select('ordem', [], null, ['class' => 'form-control']) !!}
    </div>

    <!-- Mudandoem Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('mudandoEm', 'Mudando em:') !!}
        {!! Form::text('mudandoEm', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Visibilidadeinicial Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('visibilidadeInicial', 'Visibilidade Inicial:') !!}
        {!! Form::select('visibilidadeInicial', [], null, ['class' => 'form-control']) !!}
    </div>
</div>

<!-- Submit Field -->
<div class="row">
    <div class="form-group col-sm-12">
        {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('tempos.index') !!}" class="btn btn-default">Voltar</a>
    </div>
</div>
