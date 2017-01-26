<div class="row">
    <div class="col-sm-12">
        <div class="box">
            <div class="box-body">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            {!! Form::label('nome', 'Nome:') !!}
                            {!! Form::text('nome', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ./ Nome Field -->

<div class="row">
    <div class="col-sm-12">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Instruções Iniciais</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation">
                                <a href="#listarInstrucoesInicias" aria-controls="listarInstrucoesInicias" role="tab"
                                   data-toggle="tab">Listar</a>
                            </li>
                            <li role="presentation" class="active">
                                <a href="#adicionarInstrucoesInicias" aria-controls="adicionarInstrucoesInicias"
                                   role="tab" data-toggle="tab">Adicionar</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content"
                             style="border: 1px solid #ccc; border-top: none; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; padding: 10px;">
                            <div role="tabpanel" class="tab-pane" id="listarInstrucoesInicias">dfa</div>
                            <div role="tabpanel" class="tab-pane active" id="adicionarInstrucoesInicias">
                                <table class="table table-hover" id="instrucoesIniciais">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Instrução</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ./ Instruções Iniciais -->

{{--.row>.col-sm-12>.box.box-warning>.box-header.with-border>h3.box-title{Tempo}+.box-tools.pull-right>button.btn.btn-box-tool[data-widget='collapse']>i.fa.fa-minus--}}
<div class="row">
    <div class="col-sm-12">
        <div class="box box-warning">
            <div class="box-header with-border">
                <h3 class="box-title">Tempo</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation">
                                <a href="#listarInstrucoesInicias" aria-controls="listarInstrucoesInicias" role="tab"
                                   data-toggle="tab">Listar</a>
                            </li>
                            <li role="presentation" class="active">
                                <a href="#adicionarInstrucoesInicias" aria-controls="adicionarInstrucoesInicias"
                                   role="tab" data-toggle="tab">Adicionar</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content"
                             style="border: 1px solid #ccc; border-top: none; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; padding: 10px;">
                            <div role="tabpanel" class="tab-pane" id="listarInstrucoesInicias">dfa</div>
                            <div role="tabpanel" class="tab-pane active" id="adicionarInstrucoesInicias">
                                <table class="table table-hover" id="tempo">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Total</th>
                                        <th>Ordem</th>
                                        <th>Mudando Em</th>
                                        <th>Visibilidade Inicial</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ./ Definição de tempo -->

<div class="row">
    <div class="col-sm-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Visor de Pontuação</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation">
                                <a href="#listarInstrucoesInicias" aria-controls="listarInstrucoesInicias" role="tab"
                                   data-toggle="tab">Listar</a>
                            </li>
                            <li role="presentation" class="active">
                                <a href="#adicionarInstrucoesInicias" aria-controls="adicionarInstrucoesInicias"
                                   role="tab" data-toggle="tab">Adicionar</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content"
                             style="border: 1px solid #ccc; border-top: none; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; padding: 10px;">
                            <div role="tabpanel" class="tab-pane" id="listarInstrucoesInicias">dfa</div>
                            <div role="tabpanel" class="tab-pane active" id="adicionarInstrucoesInicias">
                                <table class="table table-hover" id="visorPontuacao">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Visibilidade Inicial</th>
                                        <th>Mudando Em</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ./ Visor de Pontuação -->

<!-- Submit Field -->
<div class="row">
    <div class="form-group col-sm-12">
        {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('modelos.index') !!}" class="btn btn-default">Voltar</a>
    </div>
</div>