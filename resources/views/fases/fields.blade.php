<style>
</style>
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
                <a style="margin-top: 2px;" href="#" class="btn btn-warning btn-sm random_card">Escolher carta aleatória</a>
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
                <div class='row message-item' id="message-nothing-item"
                     style='border-bottom: 1px solid #f5f5f5; margin-top: 15px;'>
                    <div class="col-sm-12 bg-warning message-nothing-text">
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
@section('css')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endsection
@section('scripts')
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="{{url('js/noty/packaged/jquery.noty.packaged.js')}}"></script>
    <script src="{{url('js/dynamic-boxes.js')}}"></script>
    <script>
        $('i').popover({});
    </script>
@endsection
