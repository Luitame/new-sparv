<!-- Inicio Field -->
<div class="row">
    <div class="form-group col-sm-1">
        {!! Form::label('inicio', 'Início:') !!}
        {!! Form::text('inicio', null, ['class' => 'form-control tempo', 'style' => 'padding:5px;']) !!}
    </div>
</div>

<!-- Fim Field -->
<div class="row">
    <div class="form-group col-sm-1">
        {!! Form::label('fim', 'Fim:') !!}
        {!! Form::text('fim', null, ['class' => 'form-control tempo', 'style' => 'padding:5px;']) !!}
    </div>
</div>

<!-- Criterio Field -->
<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('criterio', 'Critério/Loop:') !!}
        {!! Form::text('criterio', null, ['class' => 'form-control']) !!}
    </div>
</div>

<!-- Pontos Field -->
<div class="row">
    <div class="form-group col-sm-1">
        {!! Form::label('pontos', 'Pontos:') !!}
        {!! Form::select('pontos', range(1, 13), null,['class' => 'form-control']) !!}
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
                        <button class="btn btn-primary pull-right">Adicionar</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <input name="mensagemId[]" type="hidden">
                        <div class="form-group">
                            <label>Mensagem</label>
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
        <a href="{!! route('regraExtras.index') !!}" class="btn btn-default">Voltar</a>
    </div>
</div>

@include('vendor.mask.mask')
