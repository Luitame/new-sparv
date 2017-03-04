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
        {!! Form::select('criterio', [], null, ['class' => 'form-control']) !!}
    </div>
</div>

<!-- Pontos Field -->
<div class="row">
    <div class="form-group col-sm-1">
        {!! Form::label('pontos', 'Pontos:') !!}
        {!! Form::select('pontos', range(1, 13), null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Mensagens</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-sm-12">
                        <span class="btn btn-primary pull-right mensagem-add">Adicionar</span>
                    </div>
                </div>
                <div id="mensagem-wrapper">
                    <!-- messages-box added here -->
                </div>
            </div>
        </div>
    </div>
</div>

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
@section('scripts')
    <script src="{{url('js/noty/packaged/jquery.noty.packaged.js')}}"></script>
    <script>
        $(function () {

            var $mensagemElement =
                "<div class='row mensagem-box'>" +
                "<div class='col-sm-8'>" +
                "<input name='mensagemId[]' type='hidden'>" +
                "<div class='form-group'>" +
                "<label>Mensagem</label>" +
                "<input name='mensagemTxt[]' type='text' class='form-control'>" +
                "</div>" +
                "</div>" +
                "<div class='col-sm-2'>" +
                "<div class='form-group'>" +
                "<label>Ordem</label>" +
                "<select name='mensagemOrdem[]' class='form-control'>" +
                "<option value='antes'>Antes</option>" +
                "<option value='depois'>Depois</option>" +
                "</select>" +
                "</div>" +
                "</div>" +
                "<div class='col-sm-1'>" +
                "<div class='form-group'>" +
                "<label>Pontos</label>" +
                "<select name='pontos' class='form-control'><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option></select>" +
                "</div>" +
                "</div>" +
                "<div class='col-sm-1'>" +
                "<div class='form-group'>" +
                "<label></label>" +
                "<span class='btn btn-danger mensagem-del'>Remover</span>" +
                "</div>" +
                "</div>" +
                "<hr>" +
                "</div>";

            $.noty.defaults.theme = 'bootstrapTheme';
            $.noty.defaults.timeout = 5000;
            $.noty.defaults.progressBar = true;

            messageError = function () {
                noty({
                    text: 'NOTY - a jquery notification library!',
                    type: 'error',
                });
            };

            messageAdd = function () {
                $('#mensagem-wrapper').append($mensagemElement);
            };

            messageAdd();

            $('.mensagem-add').click(function () {
                if ($('.mensagem-box').length < 4) {
                    messageAdd();
                } else {
                    alert('Você só pode colocar duas');
                }
            });

        });
    </script>
@endsection