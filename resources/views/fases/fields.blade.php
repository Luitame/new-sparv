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
        {!! Form::selectRange('pontos', 1, 13, null, ['class' => 'form-control', 'required']) !!}
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

@section('scripts')
    <script src="{{url('js/card.js')}}"></script>
@endsection
