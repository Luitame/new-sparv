@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tempo
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    <div class="col-sm-12">
                        {!! Form::open(['route' => 'tempos.store']) !!}

                        @include('tempos.fields')

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.inicioTempo').mask(
                    'HH:MM:SS', {
                        translation: {
                            'H': { pattern: /[0-23]/, optional: false },
                            'M': { pattern: /[0-59]/, optional: false },
                            'S': { pattern: /[0-59]/, optional: false }
                        },
                        placeholder: 'hh:mm:ss'
                    });
        });
    </script>
@endsection
