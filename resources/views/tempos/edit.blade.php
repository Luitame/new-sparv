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
                       {!! Form::model($tempo, ['route' => ['tempos.update', $tempo->id], 'method' => 'patch']) !!}

                            @include('tempos.fields')

                       {!! Form::close() !!}
                   </div>
               </div>
           </div>
       </div>
   </div>
@endsection
@include('vendor.mask.mask')