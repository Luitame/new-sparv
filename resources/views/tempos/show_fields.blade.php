<!-- Id Field -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('id', 'Id:') !!}
            <p>{!! $tempo->id !!}</p>
        </div>
    </div>
</div>

<!-- Inicio Field -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('inicio', 'Total:') !!}
            <p>{!! $tempo->total !!}</p>
        </div>
    </div>
</div>

<!-- Ordem Field -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('ordem', 'Ordem:') !!}
            <p>{!! $tempo->ordem !!}</p>
        </div>
    </div>
</div>

<!-- Mudandoem Field -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('mudandoEm', 'Mudandoem:') !!}
            <p>{!! $tempo->mudandoEm !!}</p>
        </div>
    </div>
</div>

<!-- Visibilidadeinicial Field -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('visibilidadeInicial', 'Visibilidadeinicial:') !!}
            <p>{!! $tempo->visibilidadeInicial !!}</p>
        </div>
    </div>
</div>

<!-- Created At Field -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('created_at', 'Created At:') !!}
            <p>{!! $tempo->created_at !!}</p>
        </div>
    </div>
</div>

<!-- Updated At Field -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('updated_at', 'Updated At:') !!}
            <p>{!! $tempo->updated_at !!}</p>
        </div>
    </div>
</div>

