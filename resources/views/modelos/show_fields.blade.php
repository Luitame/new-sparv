<!-- Id Field -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('id', 'Id:') !!}
            <p>{!! $modelo->id !!}</p>
        </div>
    </div>
</div>

<!-- Nome Field -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('nome', 'Nome:') !!}
            <p>{!! $modelo->nome !!}</p>
        </div>
    </div>
</div>

<!-- Created At Field -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('created_at', 'Created At:') !!}
            <p>{!! $modelo->created_at !!}</p>
        </div>
    </div>
</div>

<!-- Updated At Field -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('updated_at', 'Updated At:') !!}
            <p>{!! $modelo->updated_at !!}</p>
        </div>
    </div>
</div>

