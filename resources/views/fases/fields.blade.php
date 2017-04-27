<div class="row">
    <div class="col-sm-3 card_image"></div>
</div>

<!-- Carta Field -->
<div class="row">
    <div class="form-group col-sm-3">
        {!! Form::label('carta', 'Carta:') !!}
        <i
            class="fa fa-question-circle-o"
            aria-hidden="true"
            tabindex="0"
            data-toggle="popover"
            data-trigger="focus"
            title="Cartas"
            data-content="O baralho possui 895 cartas. Há duas formas de escolher uma carta para a fase. Uma é pressionar o botão 'Escolher Carta Aleatória' e a segunda e última forma é digitar um número entre 1 e 895. Ao digitar e sair do campo o software automaticamente selecionar a carta e lhe mostra uma previsualização. Ok?">
        </i>
        <div class="row">
            <div class="col-sm-4">
                {!! Form::text('carta_id', null, ['id' => 'carta_id', 'class' => 'form-control', 'required']) !!}
            </div>
            <div class="col-sm-3">
                <a style="margin-top: 2px;" href="#" class="btn btn-warning btn-sm random_card">Escolher carta
                    aleatória</a>
            </div>
        </div>
    </div>
    <div class="form-group col-sm-2">
    </div>
</div>

<!-- Criterio Field -->
<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('criterio', 'Criterio:') !!}
        {!! Form::select('criterio', ['esquerda' => 'Esquerda', 'direita' => 'Direita', 'ambos' => 'Ambos'], null, ['class' => 'form-control', 'required']) !!}
    </div>
</div>

<!-- Pontos Field -->
<div class="row">
    <div class="form-group col-sm-1">
        {!! Form::label('pontos', 'Pontos:') !!}
        {!! Form::select('pontos', range(1, 13), null, ['class' => 'form-control', 'required']) !!}
    </div>
</div>

{{--includes templates--}}
@include('layouts.mensagens')
@include('layouts.perguntas')

<!-- Submit Field -->
<div class="row">
    <div class="form-group col-sm-12">
        {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('fases.index') !!}" class="btn btn-default">Voltar</a>
    </div>
</div>

@section('css')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <style>
        .ui-menu .ui-menu-item {
            color: #444;
            padding: 3px 0px;
            border-bottom: 1px solid #ccc;
        }

        .ui-menu-item .ui-menu-item-wrapper:hover {
            padding: 3px 6px;
        }

        .ui-state-active,
        .ui-widget-content .ui-state-active,
        .ui-widget-header .ui-state-active,
        a.ui-button:active,
        .ui-button:active,
        .ui-button.ui-state-active:hover {
            color: white;
            background: #3C8DBC;
            border: none;
            padding: 3px 6px;
        }
    </style>
@endsection
@section('scripts')
    <script src="{{url('js/card.js')}}"></script>
@endsection
