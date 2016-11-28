<div class="row">
    <div class="col-sm-12">
        <p class="pull-right">
            <em style="font-size: 0.7em;">
                <strong>Criado em:</strong>
                <span>{!! date('H:m:i d/m/Y', strtotime($fase->created_at)) !!} </span>
                <strong>Ultima atualização:</strong>
                <span>{!! date('H:m:i d/m/Y', strtotime($fase->updated_at)) !!} </span>
            </em>
        </p>
    </div>
</div>

<!-- Criterio Field -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('imagem', 'Imagem:') !!}
            <p><img src="{{url("images/cartas/".$fase->carta->nome.".png")}}"
                    alt="{{url("images/cartas/".$fase->carta->nome.".png")}}" height="100px"></p>
        </div>
    </div>
</div>

<!-- Criterio Field -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('criterio', 'Critério:') !!}
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

<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-info">
            <div class="panel-heading"><h3 class="panel-title">Mensagens</h3></div>
            <div class="panel-body">
                @include('fases.table_mensagems')
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-success">
            <div class="panel-heading"><h3 class="panel-title">Perguntas</h3></div>
            <div class="panel-body">
                @include('fases.table_perguntas')
            </div>
        </div>
    </div>
</div>