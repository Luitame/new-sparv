<div class="row">
    <!-- Instrucaotxt Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('instrucaoTxt', 'Instrução:') !!}
        {!! Form::textarea('instrucaoTxt', null, ['class' => 'form-control', 'rows' => 3]) !!}
    </div>
</div>

<!-- Submit Field -->
<div class="row">
    <div class="form-group col-sm-12">
        {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('instrucaoInicials.index') !!}" class="btn btn-default">Voltar</a>
    </div>
</div>