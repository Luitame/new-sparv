<!-- Carta Field -->
<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('carta', 'Carta:') !!}
        {!! Form::select('carta_id', [], null, ['class' => 'form-control']) !!}
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
        {!! Form::text('pontos', null, ['class' => 'form-control']) !!}
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
                        <button class="btn btn-sm btn-primary pull-right">Adicionar</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-9">
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
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi commodi cumque dignissimos
                        dolore earum eos excepturi libero magni nobis quae quaerat quidem sapiente sed, tempora totam ut
                        velit vero voluptatum!
                    </div>
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