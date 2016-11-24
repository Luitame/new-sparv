@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Mensagem
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   <div class="col-sm-12">
                       {!! Form::model($mensagem, ['route' => ['mensagems.update', $mensagem->id], 'method' => 'patch']) !!}

                            @include('mensagems.fields')

                       {!! Form::close() !!}
                   </div>
               </div>
           </div>
       </div>
   </div>
@endsection