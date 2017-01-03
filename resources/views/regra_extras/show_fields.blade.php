<div class="row">
    <div class="col-sm-12">
        <p class="pull-right">
            <em style="font-size: 0.7em;">
                <strong>Criado em:</strong>
                <span>{!! $regraExtra->created_at->format('H:m:i d/m/Y') !!} </span>
                <strong>Ultima atualização:</strong>
                <span>{!! $regraExtra->updated_at->format('H:m:i d/m/Y') !!} </span>
            </em>
        </p>
    </div>
</div>

<!-- Inicio Field -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('inicio', 'Inicio:') !!}
            <p>{!! $regraExtra->inicio !!}</p>
        </div>
    </div>
</div>

<!-- Fim Field -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('fim', 'Fim:') !!}
            <p>{!! $regraExtra->fim !!}</p>
        </div>
    </div>
</div>

<!-- Criterio Field -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('criterio', 'Criterio:') !!}
            <p>{!! ucfirst($regraExtra->criterio) !!}</p>
        </div>
    </div>
</div>

<!-- Pontos Field -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('pontos', 'Pontos:') !!}
            <p>{!! $regraExtra->pontos !!}</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-info">
            <div class="panel-heading"><h3 class="panel-title">Mensagens</h3></div>
            <div class="panel-body">
                @include('regra_extras.table_mensagems')
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-success">
            <div class="panel-heading"><h3 class="panel-title">Perguntas</h3></div>
            <div class="panel-body">
                @include('regra_extras.table_perguntas')
            </div>
        </div>
    </div>
</div>

