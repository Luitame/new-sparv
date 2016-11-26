@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Cartas</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                @include('cartas.grid')
                <hr>
                <div class="pull-right">
                    {!! $cartas->render() !!}
                </div>
            </div>
        </div>
    </div>
@endsection