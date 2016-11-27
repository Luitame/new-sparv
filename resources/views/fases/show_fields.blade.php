<!-- Id Field -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('id', 'Id:') !!}
            <p>{!! $fase->id !!}</p>
        </div>
    </div>
</div>

<!-- Criterio Field -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('criterio', 'Criterio:') !!}
            <p>{!! $fase->criterio !!}</p>
        </div>
    </div>
</div>

<!-- Pontos Field -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('pontos', 'Pontos:') !!}
            <p>{!! $fase->pontos !!}</p>
        </div>
    </div>
</div>

<!-- Created At Field -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('created_at', 'Created At:') !!}
            <p>{!! $fase->created_at !!}</p>
        </div>
    </div>
</div>

<!-- Updated At Field -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('updated_at', 'Updated At:') !!}
            <p>{!! $fase->updated_at !!}</p>
        </div>
    </div>
</div>

