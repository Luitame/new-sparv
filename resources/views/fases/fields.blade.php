<div class="row">
    <!-- Criterio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('criterio', 'Criterio:') !!}
    {!! Form::select('criterio', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Pontos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pontos', 'Pontos:') !!}
    {!! Form::text('pontos', null, ['class' => 'form-control']) !!}
</div>
</div>

<!-- Submit Field -->
<div class="row">
    <div class="form-group col-sm-12">
        {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('fases.index') !!}" class="btn btn-default">Voltar</a>
    </div>
</div>
