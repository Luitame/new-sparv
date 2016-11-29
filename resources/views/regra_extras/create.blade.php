@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Regra Extra
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    <div class="col-sm-12">
                        {!! Form::open(['route' => 'regraExtras.store']) !!}

                            @include('regra_extras.fields')

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
