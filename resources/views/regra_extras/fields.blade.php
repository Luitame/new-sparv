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
        <i class="fa fa-question-circle-o"
           aria-hidden="true"
           tabindex="0"
           data-toggle="popover"
           data-trigger="focus"
           title=""
           data-original-title="Critério/Loop"
           data-content="O único detalhe que diferencía as regras extras são os critérios de movimentação ou o loop temporal em segundos. Assim sendo, se você definir Esquerda, Direita ou Ambos essa regra será de Movimentação. Já se você definir somente um valor numeral será uma R.E. de Tempo. Ok?">
        </i>
        {!! Form::text('criterio', null, ['class' => 'form-control criterio', 'placeholder' => 'Segundos ou lado']) !!}
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
