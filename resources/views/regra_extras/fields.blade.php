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
        {!! Form::select('pontos', [1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 6 => 6, 7 => 7, 8 => 8, 8 => 8, 9 => 9, 10 => 10, 10 => 10, 11 => 11, 12 => 12, 13 => 13], null,['class' => 'form-control']) !!}
    </div>
</div>

<!-- Submit Field -->
<div class="row">
    <div class="form-group col-sm-12">
        {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('regraExtras.index') !!}" class="btn btn-default">Voltar</a>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <h1 class="page-header">Mensagens</h1>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
                <a href="#adicionarMsg" aria-controls="adicionarMsg" role="tab" data-toggle="tab">Adicionar</a>
            </li>
            <li role="presentation">
                <a href="#listarMsg" aria-controls="listarMsg" role="tab" data-toggle="tab">Listar</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content" style="border: 1px solid #ccc; border-top: none; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; padding: 10px;">
            <div role="tabpanel" class="tab-pane active" id="adicionarMsg">frist</div>
            <div role="tabpanel" class="tab-pane" id="listarMsg">dfa</div>
        </div>
    </div>
</div>

@include('vendor.mask.mask')
