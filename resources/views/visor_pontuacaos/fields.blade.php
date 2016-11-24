<div class="row">
    <!-- Visibilidadeinicial Field -->
<div class="form-group col-sm-6">
    {!! Form::label('visibilidadeInicial', 'Visibilidadeinicial:') !!}
    {!! Form::text('visibilidadeInicial', null, ['class' => 'form-control']) !!}
</div>

<!-- Mudandoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mudandoEm', 'Mudandoem:') !!}
    {!! Form::text('mudandoEm', null, ['class' => 'form-control']) !!}
</div>
</div>

<!-- Submit Field -->
<div class="row">
    <div class="form-group col-sm-12">
        {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('visorPontuacaos.index') !!}" class="btn btn-default">Voltar</a>
    </div>
</div>
