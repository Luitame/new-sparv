@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Carta
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <div class="col-sm-12" style="padding-left: 20px">
                        @include('cartas.show_fields')
                        <a href="{!! route('cartas.index') !!}" class="btn btn-default">Voltar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection