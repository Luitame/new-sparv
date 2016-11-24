<!-- Id Field -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('id', 'Id:') !!}
            <p>{!! $visorPontuacao->id !!}</p>
        </div>
    </div>
</div>

<!-- Visibilidadeinicial Field -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('visibilidadeInicial', 'Visibilidadeinicial:') !!}
            <p>{!! $visorPontuacao->visibilidadeInicial !!}</p>
        </div>
    </div>
</div>

<!-- Mudandoem Field -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('mudandoEm', 'Mudandoem:') !!}
            <p>{!! $visorPontuacao->mudandoEm !!}</p>
        </div>
    </div>
</div>

<!-- Created At Field -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('created_at', 'Created At:') !!}
            <p>{!! $visorPontuacao->created_at !!}</p>
        </div>
    </div>
</div>

<!-- Updated At Field -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('updated_at', 'Updated At:') !!}
            <p>{!! $visorPontuacao->updated_at !!}</p>
        </div>
    </div>
</div>

