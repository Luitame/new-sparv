@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">
@endsection
@section('content')
    <section class="content-header">
        <h1>
            Modelo
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')

        <div class="row">
            <div class="col-sm-12">
                {!! Form::open(['route' => 'modelos.store']) !!}

                @include('modelos.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            const urlApi = "//sparv.dev/api/";
            const urlTranslate = "http://cdn.datatables.net/plug-ins/1.10.13/i18n/Portuguese-Brasil.json";

            $('#instrucoesIniciais').DataTable({
                "processing": true,
                "ajax": urlApi + "instrucao_inicials",
                "columns": [
                    {"data": "id"},
                    {"data": "instrucaoTxt"}
                ],
                "language": {
                    "url": urlTranslate
                }
            });

            $('#tempo').DataTable({
                "processing": true,
                "ajax": urlApi + "tempos",
                "columns": [
                    {"data": "id"},
                    {"data": "total"},
                    {"data": "ordem"},
                    {"data": "mudandoEm"},
                    {"data": "visibilidadeInicial"}
                ],
                "language": {
                    "url": urlTranslate
                }
            });

            $('#visorPontuacao').DataTable({
                "processing": true,
                "ajax": urlApi + "tempos",
                "columns": [
                    {"data": "id"},
                    {"data": "visibilidadeInicial"},
                    {"data": "mudandoEm"}
                ],
                "language": {
                    "url": urlTranslate
                }
            });
        });
    </script>
@endsection
