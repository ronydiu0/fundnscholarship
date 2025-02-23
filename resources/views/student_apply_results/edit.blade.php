@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Student Apply for Result
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($studentApplyResult, ['route' => ['studentApplyResults.update', $studentApplyResult->id], 'method' => 'patch']) !!}

                        @include('student_apply_results.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection