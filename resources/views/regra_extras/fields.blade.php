<!-- Inicio Field -->
<div class="row">
    <div class="form-group col-sm-1">
        {!! Form::label('inicio', 'Início:') !!}
        {!! Form::text('inicio', null, ['class' => 'form-control tempo', 'placeholder' => '00:00:00', 'style' => 'padding:5px;']) !!}
    </div>
</div>

<!-- Fim Field -->
<div class="row">
    <div class="form-group col-sm-1">
        {!! Form::label('fim', 'Fim:') !!}
        {!! Form::text('fim', null, ['class' => 'form-control tempo', 'placeholder' => '00:00:00', 'style' => 'padding:5px;']) !!}
    </div>
</div>

<!-- Criterio Field -->
<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('criterio', 'Critério/Loop:') !!}
        {!! Form::text('criterio', null, ['class' => 'form-control criterio', 'placeholder' => 'Segundo ou lado']) !!}
    </div>
</div>

<!-- Pontos Field -->
<div class="row">
    <div class="form-group col-sm-1">
        {!! Form::label('pontos', 'Pontos:') !!}
        {!! Form::select('pontos', range(1, 13), null,['class' => 'form-control']) !!}
    </div>
</div>

@include('layouts.mensagens')
@include('layouts.perguntas')

<!-- Submit Field -->
<div class="row">
    <div class="form-group col-sm-12">
        {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('regraExtras.index') !!}" class="btn btn-default">Voltar</a>
    </div>
</div>

@include('layouts.mask.mask')
