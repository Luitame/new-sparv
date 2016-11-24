<!-- Id Field -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('id', 'ID:') !!}
            <p>{!! $mensagem->id !!}</p>
        </div>
    </div>
</div>

<!-- Mensagemtxt Field -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('mensagemTxt', 'Mensagem:') !!}
            <p>{!! $mensagem->mensagemTxt !!}</p>
        </div>
    </div>
</div>