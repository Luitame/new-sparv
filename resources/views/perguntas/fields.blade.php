<div class="row">
    <!-- Perguntatxt Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('perguntaTxt', 'Pergunta:') !!}
    {!! Form::textarea('perguntaTxt', null, ['class' => 'form-control', 'rows' => '3']) !!}
</div>
</div>

<!-- Submit Field -->
<div class="row">
    <div class="form-group col-sm-12">
        {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('perguntas.index') !!}" class="btn btn-default">Voltar</a>
    </div>
</div>
