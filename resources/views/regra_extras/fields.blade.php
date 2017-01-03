<!-- Inicio Field -->
<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('inicio', 'Inicio:') !!}
        {!! Form::text('inicio', null, ['class' => 'form-control']) !!}
    </div>
</div>

<!-- Fim Field -->
<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('fim', 'Fim:') !!}
        {!! Form::text('fim', null, ['class' => 'form-control']) !!}
    </div>
</div>

<!-- Criterio Field -->
<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('criterio', 'Criterio:') !!}
        {!! Form::text('criterio', null, ['class' => 'form-control']) !!}
    </div>
</div>

<!-- Pontos Field -->
<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('pontos', 'Pontos:') !!}
        {!! Form::text('pontos', null, ['class' => 'form-control']) !!}
    </div>
</div>

<!-- Submit Field -->
<div class="row">
    <div class="form-group col-sm-12">
        {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('regraExtras.index') !!}" class="btn btn-default">Voltar</a>
    </div>
</div>
