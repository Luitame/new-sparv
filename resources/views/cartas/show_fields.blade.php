<!-- Id Field -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('id', 'Id:') !!}
            <p>{!! $carta->id !!}</p>
        </div>
    </div>
</div>

<!-- Nome Field -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('nome', 'Nome:') !!}
            <p>{!! $carta->nome !!}</p>
        </div>
    </div>
</div>

<!-- Cor Field -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('cor', 'Cor:') !!}
            <p>{!! $carta->cor !!}</p>
        </div>
    </div>
</div>

<!-- Simbolo Field -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('simbolo', 'Simbolo:') !!}
            <p>{!! $carta->simbolo !!}</p>
        </div>
    </div>
</div>

<!-- Verso Field -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('verso', 'Verso:') !!}
            <p>{!! $carta->verso !!}</p>
        </div>
    </div>
</div>

<!-- Created At Field -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('created_at', 'Created At:') !!}
            <p>{!! $carta->created_at !!}</p>
        </div>
    </div>
</div>

<!-- Updated At Field -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('updated_at', 'Updated At:') !!}
            <p>{!! $carta->updated_at !!}</p>
        </div>
    </div>
</div>

