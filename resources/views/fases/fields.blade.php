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
<!-- Carta Field -->
<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('carta', 'Carta:') !!}
        {!! Form::select('carta_id', [], null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-sm-2">
        <a style="margin-top: 25px;" href="#" class="btn btn-warning btn-sm">Escolher carta aleatória</a>
    </div>
</div>

<!-- Criterio Field -->
<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('criterio', 'Criterio:') !!}
        {!! Form::select('criterio', ['Esquerda', 'Direita', 'Ambos'], null, ['class' => 'form-control']) !!}
    </div>
</div>

<!-- Pontos Field -->
<div class="row">
    <div class="form-group col-sm-1">
        {!! Form::label('pontos', 'Pontos:') !!}
        {!! Form::select('pontos', range(1, 13), null, ['class' => 'form-control']) !!}
    </div>
</div>

<!-- Messages -->
<div class="row">
    <div class="col-sm-12">

        <!-- box message -->
        <div class="box box-info" id="message">

            <div class="box-header with-border">

                <h3 class="box-title">Mensagens</h3>

                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>

            </div>

            <div class="box-body">
                <div class="row">
                    <div class="col-sm-12">
                        <span class="btn btn-primary btn-sm pull-right message-add">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
            </div>

            <div class="box-footer" id="message-list" style="overflow: hidden;">
                <!-- Messages box will be added here -->
            </div>
        </div>
        <!-- /box message -->
    </div>
</div>
<!-- /Messages -->

<div class="row">
    <div class="col-sm-12">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Perguntas</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-sm-12">
                        <button class="btn btn-primary pull-right">Adicionar</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <input name="mensagemId[]" type="hidden">
                        <div class="form-group">
                            <label>Pergunta</label>
                            <input name="mensagemTxt[]" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="">Ordem</label>
                            <select name="mensagemOrdem[]" class="form-control">
                                <option value="antes">Antes</option>
                                <option value="depois">Depois</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <div class="form-group">
                            <label>Pontos</label>
                            {!! Form::select('pontos', range(1, 13), null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <div class="form-group">
                            <label></label>
                            {{--<input type="submit" class="btn btn-sm btn-danger form-control" name="remover">--}}
                            <button class="btn btn-danger">Remover</button>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>

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
@endsection
