<!-- Id Field -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('id', 'ID:') !!}
            <p>{!! $pergunta->id !!}</p>
        </div>
    </div>
</div>

<!-- Perguntatxt Field -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('perguntaTxt', 'Pergunta:') !!}
            <p>{!! $pergunta->perguntaTxt !!}</p>
        </div>
    </div>
</div>