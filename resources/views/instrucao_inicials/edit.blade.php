@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Instrucao Inicial
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   <div class="col-sm-12">
                       {!! Form::model($instrucaoInicial, ['route' => ['instrucaoInicials.update', $instrucaoInicial->id], 'method' => 'patch']) !!}

                            @include('instrucao_inicials.fields')

                       {!! Form::close() !!}
                   </div>
               </div>
           </div>
       </div>
   </div>
@endsection