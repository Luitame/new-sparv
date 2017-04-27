<!-- Visibilidadeinicial Field -->
<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('visibilidadeInicial', 'Visibilidade Inicial:') !!}
        {!! Form::select('visibilidadeInicial', ['visivel' => 'Visível', 'invisivel' => 'Invisível'], null, ['class' => 'form-control']) !!}
    </div>
</div>

<!-- Mudando em Field -->
<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('mudandoEm', 'Mudando Em:') !!}
        {!! Form::text('mudandoEm', null, ['class' => 'form-control tempo', 'style' => 'padding:5px;']) !!}
    </div>
</div>

<!-- Submit Field -->
<div class="row">
    <div class="form-group col-sm-12">
        {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('visorPontuacaos.index') !!}" class="btn btn-default">Voltar</a>
    </div>
</div>
