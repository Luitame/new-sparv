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

<!-- Messages -->
<div class="row">
    <div class="col-sm-12">

        <!-- box message -->
        <div class="box box-info collapsed-box" id="message">

            <div class="box-header with-border">

                <h3 class="box-title">Mensagens</h3>

                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                </div>

            </div>

            <div class="box-body" style="display: none;">
                <div class="row">
                    <div class="col-sm-12">
                        <span class="btn btn-primary btn-sm pull-right message-add">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
            </div>

            <div class="box-footer" id="message-list" style="overflow: hidden;">
                <div id="message-nothing-item"
                     class='row message-item'
                     style='border-bottom: 1px solid #f5f5f5; margin-top: 15px;'>
                    <div class="col-sm-12 bg-warning" style="padding: 2rem;">
                        Nenhuma mensagem adicionada à esta fase
                    </div>
                </div>
                <!-- Messages box will be added here -->
            </div>
        </div>
        <!-- /box message -->
    </div>
</div>
<!-- /Messages -->

<!-- Submit Field -->
<div class="row">
    <div class="form-group col-sm-12">
        {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('fases.index') !!}" class="btn btn-default">Voltar</a>
    </div>
</div>

<template id="message-element">
    <div class='row message-item' style='border-bottom: 1px solid #f5f5f5; margin-top: 15px;'>
        <div class='col-sm-8'>
            <div class='form-group'>
                <label>Mensagem</label>
                <input required name='mensagemTxt[]' type='text' class='form-control mensagemTxt'>
                <input required name='mensagemId[]' type='hidden' class='form-control mensagemId'>
            </div>
        </div>
        <div class='col-sm-2'>
            <div class='form-group'>
                <label>Ordem</label>
                <select required name='mensagemOrdem[]' class='form-control'>
                    <option value='antes'>Antes</option>
                    <option value='depois'>Depois</option>
                </select>
            </div>
        </div>
        <div class='col-sm-1'>
            <div class='form-group'>
                <label>Pontos</label>
                <select required name='mensagemPontos[]' class='form-control'>
                    <option value='1'>1</option>
                    <option value='2'>2</option>
                    <option value='3'>3</option>
                    <option value='4'>4</option>
                    <option value='5'>5</option>
                    <option value='6'>6</option>
                    <option value='7'>7</option>
                    <option value='8'>8</option>
                    <option value='9'>9</option>
                    <option value='10'>10</option>
                    <option value='11'>11</option>
                    <option value='12'>12</option>
                    <option value='13'>13</option>
                </select>
            </div>
        </div>
        <div class='col-sm-1'>
            <div class='form-group'>
                <span class='btn btn-danger message-delete' style='margin-top: 1.7em;'>
                    <i class='fa fa-trash' aria-hidden='true'></i>
                </span>
            </div>
        </div>
    </div>
</template>

<template id="message-nothing-item-element">
    <div class='row message-item' id='message-nothing-item' style='border-bottom: 1px solid #f5f5f5; margin-top: 15px;'>
        <div class='col-sm-12 bg-warning' style="padding: 2rem;">Nenhuma mensagem adicionada à esta fase</div>
    </div>
</template>

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
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="{{url('js/card.js')}}"></script>
    <script src="{{url('js/mensagens.js')}}"></script>
    <script>
        $('i').popover({});
    </script>
@endsection
